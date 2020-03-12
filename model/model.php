<?php
/**
 * Model RentASnow
 * User: benoit.pierrehumbert
 * Date: 24.01.2020
 * Time: 16:55
 */
function getPDO()
{
    require ".const.php";
    $res = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $res;
}
function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}
function getSnows()
{
    //return json_decode(file_get_contents("model/dataStorage/snows.json"),true);
    return getSnowsDB();
}
function getUsers()
{
    return getUsersDB();
    //return json_decode(file_get_contents("model/dataStorage/users.json"),true);
}
function putUsers($tab)
{

    file_put_contents('model/dataStorage/users.json', json_encode($tab));
}
function getUsersDB()
{

    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM users';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll();//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}
function getSnowsDB()
{
/*SELECT *
FROM table1
LEFT JOIN table2 ON table1.id = table2.fk_id
*/
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM snows 
                  left join snowtypes
                  on snows.snowtype_id = snowtypes.id';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll();//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}
function getNewsDB()
{

    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM filmmakers';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll();//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}
?>
