<?php

class GlobalFunctions
{

    function __construct()
    {
    }

    function ExisteValue($table, $row, $value)
    {
        $cont = 0;
        $dbConnection = new ConnectionBd();
        $con = $dbConnection->DbConnection();

        if ($table == "" || $row == "" || $value == "") {
            echo ("Campos vazios, por favor preenche");
        }

        try {

            $query = "SELECT *FROM `$table` WHERE `$row` = '$value'";
            $executeValues = mysqli_query($con, $query);

            while ($values = mysqli_fetch_assoc($executeValues)) {
                $cont++;
            }

            if ($cont > 0)
                return true;
            else
                return false;
        } catch (\Throwable $th) {

            echo ("Deu Bug Aqui !");
        }
    }

    function DoLogin($email, $password)
    {
        $dbConnection = new ConnectionBd();
        $con = $dbConnection->DbConnection();

        $query = "SELECT * FROM users WHERE email = `$email`";

        $executequery = mysqli_query($con, $query);

        if ($executequery->num_rows > 0) {

            while ($row = mysqli_fetch_assoc($executequery)) {

                $queryVerificationPasswords = "SELECT *FROM CLIENT WHERE ID_USER = $row[´ID´] and password ='$password'";
                $executeQueryPasswords = mysqli_query($con, $queryVerificationPasswords);


                if ($executeQueryPasswords->num_rows >= 1) {

                    while ($rowPasswords = mysqli_fetch_assoc($executeQueryPasswords)) {
                        setcookie("ID_CLIENT", $rowPasswords[`ID_USER`], time() + (86400 * 30), "/");
                    }

                    echo json_encode(array("Error" => 0));
                } else {
                    echo json_encode(array("Error" => 1));
                }
            }
        }
    }

    function DoLoginSeller($email, $password)
    {
        $dbConnection = new ConnectionBd();
        $con = $dbConnection->DbConnection();

        $query = "SELECT * FROM users WHERE email = `$email`";

        $executequery = mysqli_query($con, $query);

        if ($executequery->num_rows > 0) {

            while ($row = mysqli_fetch_assoc($executequery)) {

                $queryVerificationPasswords = "SELECT *FROM SELLER WHERE ID_USER = $row[´ID´] and password ='$password'";
                $executeQueryPasswords = mysqli_query($con, $queryVerificationPasswords);


                if ($executeQueryPasswords->num_rows >= 1) {

                    while ($rowPasswords = mysqli_fetch_assoc($executeQueryPasswords)) {
                        setcookie("ID_SELLER", $rowPasswords[`ID_USER`], time() + (86400 * 30), "/");
                    }

                    echo json_encode(array("Error" => 0));
                } else {
                    echo json_encode(array("Error" => 1));
                }
            }
        }
    }

    function GetAllProducts()
    {
        $con = new ConnectionBd();
        $data = [];

        $conect = $con->DbConnection();
        $query = $con->DbQuerySimples($conect, "PRODUCT", "", "");

        if ($query->num_rows > 1) {
            while ($row = mysqli_fetch_assoc($query)) {
                $data += [
                    "id" => $row["id"],
                    "nome_producto" => $row["produto_name"],
                    "descricao" => $row["description"],
                    "preco" => $row["price"],
                    "quantidade" => $row["amount"],
                    "disponibilidade" => $row["availability"],
                    "img_url" => $row["img_url"],
                ];
            }

            echo json_encode(array($data));
        } else
            echo json_encode(array("Error" => 1));
    }

    function AddClients($email, $password)
    {
        $con = new ConnectionBd();

        $conect = $con->DbConnection();
        $query = $con->DbQuerySimples($conect, "USER", "email", `$email`);

        if ($query->num_rows >= 1) {
            while ($row = mysqli_fetch_assoc($query)) {

                $guid = bin2hex(openssl_random_pseudo_bytes(16));
                $queryForInsert = "INSERT INTO `CLIENT` (ID,ID_USER,PASSWORD)
                VALUES ('$guid',$row[´ID´],'$password')";

                $result = mysqli_query($conect, $query);
            }

            echo json_encode(array("Error" => 0));
        } else
            echo json_encode(array("Error" => 1));
    }
}
