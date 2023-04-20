<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        if(isset($_POST['val1'])){
        if(isset($_POST['val2'])){
        $val1=htmlentities($_POST['val1']);
        $val2=htmlentities($_POST['val2']);
        
        # test if input is_numeric
        function is_numeric_($x) {
        if(is_numeric($x)){
            echo "$x is a integer/number <br>";}
            else 
            {echo "$x is not a number, please retry <br>";}
        }
            is_numeric_($val1);
            is_numeric_($val2);

           

            
            if(isset($_POST['calc']))
            $calc=htmlentities($_POST['calc']);
            # test if calc is not null
            if(!empty($calc)){
                $result=0;
                # switch statement for value of calc
                
                {
                switch($calc){
                    case 'add':
                        $result= $val1 + $val2;
                        break;
                    case 'sub':
                        $result= $val1 - $val2;
                        break; 
                    case 'mul':
                        $result= $val1 * $val2;
                        break;
                    case 'div':
                        $result= $val1 / $val2;
                        break;
                    }
                echo "Calculation result: $result"; 
                }}}}
        
        else{ echo "Invalid entry - please retry"; }
             
            
       
    ?>
</body>
</html>