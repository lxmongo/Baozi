<!--Use Ajax to realize the hint for login page-->

    <?php
                $a[]="test";
                $a[]="test123";
                $a[]="test12345";

                $q=$_REQUEST["q"];
                $hint = "";
                
                if($q!==""){
                    $q = strtolower($q);
                    $len = strlen($q);
                    foreach($a as $name){
                        if(stristr($q,substr($name,0,$len))){
                            if($hint === ""){
                                 $hint = $name;
                            }else{
                            $hint .= ",$name";
                            }
                        }
                }
                }
            echo $hint === ""?"no hint":$hint;
         ?>