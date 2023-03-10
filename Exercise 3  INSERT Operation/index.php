<?php 

$pdo = require("connect.php");




$datas = [
        ["ID" => 1, "NAME" => "Paul", "AGE" => 32, "ADDRESS" => "California", "SALARY" => 20000.00 ],
        ["ID" => 2, "NAME" => "Allen", "AGE" => 25, "ADDRESS" => "Texas", "SALARY" => 15000.00 ],
        ["ID" => 3, "NAME" => "Teddy", "AGE" => 23, "ADDRESS" => "Norway", "SALARY" => 20000.00 ],
        ["ID" => 4, "NAME" => "Mark", "AGE" => 25, "ADDRESS" => "Rich-Mond", "SALARY" =>  65000.00  ],

];
    
$sql = 'INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        VALUES(:id,:name,:age,:address,:salary)';

$statement = $pdo->prepare($sql);


foreach($datas as $data) {
         $statement->execute([
                ":id" => $data["ID"],
                ":name" => $data["NAME"],
                ":age" => $data["AGE"],
                ":address" => $data["ADDRESS"],
                ":salary" => $data["SALARY"]
        ]);
}


$pdo = null;

?>
