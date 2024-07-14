<?php
    echo '<h1>Multi dimensional array in PHP</h1>';

    // $matrixArray = [
    //     [2,1,4,8],
    //     [6,9,2,6],
    //     [7,3,5,0]
    // ];

    $matrixArray = array(
        array(2,1,4,8),
        array(6,9,2,6),
        array(7,3,5,0)
    );

    echo var_dump($matrixArray) . '<br>';

    // Multi dimensional arrays are arrays inside arrays.

    // if an array contains one array inside it then it is called 2d array and 2 arrays inside are called 3d array and so on.

    // looping through parent array.

    for ($i=0; $i < count($matrixArray); $i++) { 
        echo var_dump($matrixArray[$i]) . "<br>";
    }
    
    echo '<br>';

    for ($i=0; $i < count($matrixArray); $i++) { 
        for($j = 0; $j < count($matrixArray[$i]); $j++){
            echo $matrixArray[$i][$j];
        }
        echo '<br>';
    }

    // 3D array looping:

    $threeDArray = [
        [
            [6,9,5,3,1]
        ],
        [
            [1,2,3,4,5]
        ],
        [
            [9,4,6,2,5]
        ]
        ];

        echo "<br>";

    for($j = 0; $j < count($threeDArray); $j++){
        for($k = 0; $k < count($threeDArray[$j]); $k++){
            for($l = 0; $l < count($threeDArray[$j][$k]); $l++){
                echo $threeDArray[$j][$k][$l];
            }    
        }
        echo '<br>';
    }


?>