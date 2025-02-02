<?php
class Connection
{
    function connect($dbname, $host, $user, $pass)
    {
        try {
            $pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $user, $pass);
        } catch (PDOException $e) {
            echo "PDOException Error.\n<br/>".$e->getMessage();

        } catch (Exception $e) {
            echo "Exception Error.\n<br/>".$e->getMessage();
        }
        return $pdo;
    }
}
?>