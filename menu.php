<?php
header("Content-type: application/json");
include 'Data.php';
$req = $_GET['req'] ?? null;
if ($req) {
    $jsonData = file_get_contents("data.json");
    $dataList = json_decode($jsonData, true)['menu_items'];
    try {
        $menuData = new Data($dataList);
    } catch (Exception $th) {
        echo json_encode([$th->getMessage()]);
        return;
    }
}
switch ($req) {
    case "menu_data":
        $id = $_GET['id'] ?? null;
        echo $menuData->getitem($id);
        break;
    default:
        echo json_encode(["In-valid request"]);
        break;
}
?>