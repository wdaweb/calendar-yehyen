
<h1>陣列練習-學生成績資料設計</h1>
<?php
    $judy = ["國文"=>95, "英文"=>64, 70, 90, 84];
    $amo = [99, 89, 54, 81, 71];
    $john = [45, 60, 68, 70, 62];
    $peter = [59, 32, 77, 54, 42];
    $hebe = [71, 62, 80, 62, 64];
    echo "<pre>";print_r($judy);echo"</pre>";



    $score = [
        "judy" => [
            "國文"=>95,
            "英文"=>64,
            "數學"=>70,
            "地理"=>90,
            "歷史"=>84
        ],
        "amo" => [
            "國文"=>88,
            "英文"=>78,
            "數學"=>54,
            "地理"=>81,
            "歷史"=>71
        ],
        "john" => [
            "國文"=>45,
            "英文"=>60,
            "數學"=>68,
            "地理"=>70,
            "歷史"=>62    
        ],
        "peter" => [
            "國文"=>59,
            "英文"=>32,
            "數學"=>77,
            "地理"=>54,
            "歷史"=>42    
        ],
        "hebe" => [
            "國文"=>71,
            "英文"=>62,
            "數學"=>80,
            "地理"=>62,
            "歷史"=>64    
        ]
    ];
    echo "<pre>";print_r($score);echo "</pre>";



    $table = [];
    $name[] = ["judy", "amo", "john", "peter", "hebe"];
    $subject[] = ["國文", "英文", "數學", "地理", "歷史"];
    $grade[] = [
        [95, 64, 70, 90, 84],
        [88, 78, 54, 81, 71],
        [45, 60, 68, 70, 62],
        [59, 32, 77, 54, 42],
        [71, 62, 80, 62, 64]
    ];
    for($i=0; $i<count($name);$i++){
        $table[] = $name[$i] . $subject[i] ;
    }
    echo "<pre>";print_r($table);echo "</pre>";


    echo "<table border='1'>";
    $a = [];
    for($i=1; $i<10; $i++){
        // echo "<tr>";
        for($j=1; $j<10; $j++){
            $a[] = "<td>" . $i . "x" . $j . "=" . ($i*$j) . "</td>";
        }
        echo "</tr>";
        
    } 
    // echo "<pre>";print_r($a);echo "</pre>";  

    // for($i=0; $i<count($a); $i++){
    //     echo $a[$i] . " , "  ;
    //     if($i%9==8){
    //         echo "<br>";
    //     }
    // }

    foreach($a as $key => $d){
        echo $d ." , ";
        if($i%9==8){
            echo "<br>";
        }
    }
    echo "</table>";
?>