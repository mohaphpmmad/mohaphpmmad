$wal = "TX2trvday8LJWFCFJAuGaJ2FA7BBYsZ3fo";
$get=json_decode(file_get_contents("https://apilist.tronscan.org/api/transaction?sort=-timestamp&count=true&limit=50&start=0&address=$wal"),true);
for($i=0;$i<50;$i++){
$hash = $get['data'][$i]['hash'];
$to = $get['data'][$i]['toAddress'];
$price = $get['data'][$i]['contractData']['amount'];
Echo "$price"."$hash"."$to";
}
