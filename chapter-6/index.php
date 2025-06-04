<?php

    //Exercise 1
    do {
        $input = readline("Enter your input: ");
    } while ($input !== ucfirst($input));
    
?>


<?php

    //Exercise 2

    while(true){

        $input =readline("Enter your input: ");

        if(is_numeric($input)){
            break;
        }
    }
?>

<?php

    //Exercise 3
    for($i=1; $i<22; $i++){
        if($i%3 === 0){
            print($i . "\n");
        }
        continue;
    }
?>