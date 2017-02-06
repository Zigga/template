   <?php 

        $names=array("paul", "amy", "ben", "james", "karl");
        sort($names);
        function printArray1($names){
            foreach ($names as $value){
                echo "$value<br>";
            }
        }
        printArray1($names);
    ?>
    