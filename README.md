# Labs
For labs of script languages 
<?php
$mongo = new MongoClient();
$maindb = $mongo->test;
$usercollection=$maindb->memories;
$arr=$usercollection->find();
foreach ($arr as $x){
    echo "Name: " . $x['name']." ->E-mail: ".$x['email'].'<br/>';
}    
exit();
?>
