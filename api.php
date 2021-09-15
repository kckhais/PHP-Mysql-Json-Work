<?php
require_once "config.php";
class API {
    function Select(){
        $db = new Connect;
        $id = array();
        $data = $db->prepare('SELECT * FROM movie ORDER BY id');
        $data->execute();
        while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
            $id[$OutputData['id']] = array(
                'id'        => $OutputData['id'],
                'name'      => $OutputData['name'],
                'year'      => $OutputData['year'],
                'direction' => $OutputData['direction'],
                'date'      => $OutputData['date']
            );
        }
        return json_encode($id);
    }
}
    $API = new API;
    header('Content-Type: application/json');
    echo $API->Select();