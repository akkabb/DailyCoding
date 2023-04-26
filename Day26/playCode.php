<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daily Coding</title>
</head>
<body>
    <div class="container">
        <h1>PHP basic</h1>
        <main>
            <section class="exo37">
                <h2>Exercice 37</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to compute the sum of the prime numbers less than 100.</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Note : </strong> There are 25 prime numbers are there in less than 100 </p>
                        <p>2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97 and sum of all these numbers is 1060.</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>I try my best : </h3>
                        <p class="php">
                            <?php 
                                // Define the prime number less than 100
                                function primeCheck($number){
                                    if ($number == 1)
                                    return 0;
                                    for ($i = 2; $i <= $number/2; $i++){
                                        if ($number % $i == 0)
                                            return 0;
                                    }
                                    return 1;
                                }
                                // Fill the Array from 0 to 100
                                $arr = [];
                                $i = 0;
                                while ($i < 101)
                                {
                                    $arr[] = $i;
                                    $i++;
                                }
                                //var_dump($arr);
                                // Sum all these numbers
                                $sum = 0;
                                foreach($arr as $value)
                                {
                                    $flag = primecheck($value);
                                    if ($flag == 1)
                                    {
                                        $sum += $value;
                                    }
                                   
                                }
                                echo $sum . "<br>";
                            ?>
                        </p>
                    </div>
                    <div class="myCode">
                        <h3>I show you my script : </h3>
                        <p>
                            &lt?php <br>
                            // Define the prime number less than 100 <br>
                                function primeCheck($number){ <br>
                                    if ($number == 1) <br>
                                    return 0; <br>
                                    for ($i = 2; $i <= $number/2; $i++){ <br>
                                        if ($number % $i == 0) <br>
                                            return 0; <br>
                                    } <br>
                                    return 1; <br>
                                } <br>
                                // Fill the Array from 0 to 100 <br>
                                $arr = []; <br>
                                $i = 0; <br>
                                while ($i < 101) <br>
                                { <br>
                                    $arr[] = $i; <br>
                                    $i++; <br>
                                } <br>
                                //var_dump($arr); <br>
                                // Sum all these numbers <br> 
                                $sum = 0; <br>
                                foreach($arr as $value) <br>
                                { <br>
                                    $flag = primecheck($value); <br>
                                    if ($flag == 1) <br>
                                    { <br>
                                        $sum += $value; <br>
                                    } <br>
                                   
                                } <br>
                                echo $sum . "<br>";
                            ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>My point of view :</h3>
                        <p>
                           I got the same result, don't know if it is the good habit . <a href="https://www.geeksforgeeks.org/php-check-number-prime/">This</a> helped me.
                            I didn't know how to make the function to define if it's a prime number or not!
                        </p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-37.php">solution</a></p>
                        <p>Nice to solve the problem. And its very informative to see an other way to do that </p>
                    </div>
                </div>
            </section>
            <section class="exo38">
            <h2>Exercice 38</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to valid an email address.</h3>
                    <div class="answerWrapper">
                        <div class="mySol">
                            <h3>Lets GO!!</h3>
                            <p class="php">
                                <?php
                                    $email = "ek@gmil.fr";
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                        // invalid emailaddress
                                        echo "Invalid mail";
                                    }
                                ?>
                            </p>
                        </div>
                        <div class="myCode">
                            <h3>My script :</h3>
                            <p>
                                &lt?php <br>
                                    $email = "ek@gmil.fr"; <br>
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { <br>
                                        // invalid emailaddress <br>
                                        echo "Invalid mail"; <br>
                                    } <br>
                                ?&gt
                            </p>
                        </div>
                        <div class="comment_area">
                            <h3>My point of view :</h3>
                            <p> I've done it earlier in this month, but i couldn't find the solution on my own. i googled it . And <a href="https://stackoverflow.com/questions/12026842/how-to-validate-an-email-address-in-php">it</a> helped me</p>
                            <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-38.php">solution</a></p>
                        </div>
                    </div>
                </section>
                <section class="exo39">
                    <h2>Exercice 39</h2>
                    <div class="resumeWrapper">
                        <h3>Write a PHP program to get the size of a file.</h3>
                    </div>
                    <div class="answerWrapper">
                        <div class="mySol">
                            <H3>Try to solve it</H3>
                            <p class="php">
                            <?php
                                $file =file_get_contents("file.txt");
                               echo filesize("file.txt");
                            ?>  
                            </p>
                        </div>
                        <div class="myCode">
                            <h3>Sample script : </h3>
                            <p>
                                &lt?php <br>
                                $file =file_get_contents("file.txt"); <br>
                               echo filesize("file.txt"); <br>
                                ?&gt <br>
                            </p>
                        </div>
                        <div class="comment_area">
                            <h3>My point of view :</h3>
                            <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-39.php">solution</a></p>
                        </div>
                    </div>
                </section>
            <section class="exo40">
            <h2>Exercice 40</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to calculate the mod of two given integers without using any inbuilt modulus operator.</h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>I will try my best :</h3>
                       <p class="php">
                        <?php
                            function without_mod($m, $n)
                            {
                               $divides=(int)($m/$n);
                               return $m-$n*$divides;
                            }
                            echo without_mod(13, 2)."\n";
                            echo without_mod(81, 3)."\n";
                        ?>
                       </p>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                        <p>
                            &lt?php <br>
                            function without_mod($m, $n) <br>
                            { <br>
                            $divides=(int)($m/$n); <br>
                            return $m-$n*$divides; <br>
                            } <br>
                            echo without_mod(13, 2)."\n"; <br>
                            echo without_mod(81, 3)."\n"; <br>
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>I didn't understand the statement. So impossible for me to solve it.</p>
                        <p>The website <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-40.php">solution</a> </p>
                        <p></p>
                    </div>
                </div>
            </section>
            <section class="exo41">
            <h2>Exercice 41</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to print out the multiplication table upto 6*6</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Output : </strong></p>
                        <table> 
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>4</td>
                                <td>6</td>
                                <td>8</td>
                                <td>10</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>6</td>
                                <td>9</td>
                                <td>12</td>
                                <td>15</td>
                                <td>18</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>8</td>
                                <td>12</td>
                                <td>16</td>
                                <td>20</td>
                                <td>24</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>10</td>
                                <td>15</td>
                                <td>20</td>
                                <td>25</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>12</td>
                                <td>18</td>
                                <td>24</td>
                                <td>30</td>
                                <td>36</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Go GO GO !!!</h3>
                        <?php
                            for ($i = 1; $i < 7; $i++) {
                                for ($j = 1; $j < 7; $j++) {
                                   if ($j == 1) {
                                     echo str_pad($i*$j, 2, " ", STR_PAD_LEFT);
                                   } else {
                                     echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
                                   }
                                }
                                echo "\n";
                              }
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                        <p>
                            &lt?php <br>
                            for ($i = 1; $i < 7; $i++) {
                                for ($j = 1; $j < 7; $j++) {
                                    if ($j == 1) {
                                    echo str_pad($i*$j, 2, " ", STR_PAD_LEFT);
                                    } else {
                                    echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
                                    }
                                }
                                echo "\n";
                                }
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>I didn't manage to solve it</p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-41.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo42">
            <h2>Exercice 42</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to find the first non-repeated character in a given string.</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Input :</strong> Green</p>
                        <p><strong>Output :</strong> G</p>
                        <p><strong>Input :</strong> abcdea</p>
                        <p><strong>Output :</strong> b</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Try to solve it :</h3>
                        <p class="php">
                            <?php
                               $str = "abcdea";
 
                               /* Convert a string into an array. */
                               $str = str_split($str);
                                
                               /* Count all the values of an array. */
                               $arr = array_count_values($str);
                                
                               foreach($arr as $key => $value){
                                
                                if($value == 1){
                                
                                echo "First non-repeated character is $key";
                                break;
                                }
                               }
                            ?>

                        </p>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                            <p>
                                &lt?php <br>
                                    $str = "abcdea"; <br>
 
                                    /* Convert a string into an array. */ <br>
                                    $str = str_split($str); <br>
                                    
                                    /* Count all the values of an array. */ <br>
                                    $arr = array_count_values($str); <br>
                                    
                                    foreach($arr as $key => $value){ <br>
                                    
                                    if($value == 1){ <br>
                                    
                                    echo "First non-repeated character is $key"; <br>
                                    break; <br>
                                    }
                                    }
                                ?&gt
                            </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>Thanks to this <a href="https://webrewrite.com/program-find-first-non-repeated-character-string/">link</a> </p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-30.php">solution</a></p>
                    
                    </div>
                </div>
            </section>
            <section class="exo43">
            <h2>Exercice 43</h2>
                <div class="resumeWrapper">
                    <h3> Write a PHP program that multiplies corresponding elements of two given lists.</h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Let's GO !!</h3>
                        <p class="php">
                        <?php
                            function multiply_two_lists($x, $y)
                            {
                              $a = explode(' ',trim($x));
                              $b = explode(' ',trim($y));
                              foreach($a as $key=>$value){
                                  $output[$key] = $a[$key]*$b[$key];
                              }
                              return implode(' ',$output);
                          }
                          echo multiply_two_lists(("20 12 5"), ("1 3 3"))."\n";
                        ?>
                        </p>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                            <p>
                                &lt?php <br>
                                function multiply_two_lists($x, $y)
                            {
                              $a = explode(' ',trim($x));
                              $b = explode(' ',trim($y));
                              foreach($a as $key=>$value){
                                  $output[$key] = $a[$key]*$b[$key];
                              }
                              return implode(' ',$output);
                          }
                          echo multiply_two_lists(("20 12 5"), ("1 3 3"))."\n";
                                ?&gt
                            </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-43.php">solution</a></p>
                        <p>To be able to solve the problem i google it and try to find the solution. Need to be done several times until i understand. It will help me later.</p>
                    </div>
                </div>
            </section>
            <section class="exo44">
            <h2>Exercice 44</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to print out the sum of pairs of numbers of a given sorted array of positive integers which is equal to a given number</h3>
                    
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Ready , Go :</h3>
                        <?php
                            function find_Pairs($nums, $pair_sum) {
                                $nums_pairs = "";
                                for ($i = 0; $i <= count($nums); $i++) {
                                   for ($j = $i + 1; $j < count($nums); $j++) {
                                      if ($nums[$i] + $nums[$j] == (int)$pair_sum) {
                                         $nums_pairs .= $nums[$i] . "," . $nums[$j] . ";";
                                      }
                                   }
                                }
                                return $nums_pairs;
                              }
                              $nums = array(0,1,2,3,4,5,6);
                              echo find_Pairs($nums, 7)."\n";
                              echo find_Pairs($nums, 5)."\n";
                              
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Showing my script :</h3>
                        <p>
                            &lt?php <br>
                            function find_Pairs($nums, $pair_sum) { <br>
                                $nums_pairs = ""; <br>
                                for ($i = 0; $i <= count($nums); $i++) { <br>
                                   for ($j = $i + 1; $j < count($nums); $j++) { <br>
                                      if ($nums[$i] + $nums[$j] == (int)$pair_sum) { <br>
                                         $nums_pairs .= $nums[$i] . "," . $nums[$j] . ";"; <br>
                                      } <br>
                                   } <br>
                                } <br>
                                return $nums_pairs; <br>
                              } <br>
                              $nums = array(0,1,2,3,4,5,6); <br>
                              echo find_Pairs($nums, 7)."\n"; <br>
                              echo find_Pairs($nums, 5)."\n"; <br>
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>After watching the solution, i can say that this <a href="https://daafoor.com/q-8203-Write-a-PHP-program-to-print-out-the-sum-of-pairs-of-numbers-of-a-given-sorted-array-of-positive-integers-which-is-equal-to-a-given-number">website</a> got the same answer</p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-44.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo45">
            <h2>Exercice 45</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to compute the sum of the digits of a number.</h3>
                    
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Lest's Go </h3>
                    <?php
                       function sum($num) {
                        $sum = 0;
                        for ($i = 0; $i < strlen($num); $i++){
                        $sum += $num[$i];
                        }
                        return $sum;
                        }
                        echo sum("711");
                    ?>
                    </div>
                    <div class="myCode">
                        <h3>My Script : </h3>
                        <p>
                            &lt?php <br>
                            function sum($num) { <br>
                            $sum = 0; <br>
                            for ($i = 0; $i < strlen($num); $i++){ <br>
                            $sum += $num[$i]; <br>
                            } <br>
                            return $sum; <br>
                            } <br>
                            echo sum("711"); <br>
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>
                           I do try on my own. I <a href="https://www.geeksforgeeks.org/php-sum-digits-number/">googled</a> it. I'am happy. But i didn't try on my own. 
                        </p>
                        <p>share the link to the <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-45.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo46">
            <h2>Exercice 46</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to find heights of the top three building in descending order from eight given buildings. </h3>
                    <div class="resumeOutputExple">
                        <p><strong>Input :</strong> 0 = height of building (integer) = 10,000 </p>
                        <p><strong>Output :</strong></p>
                        <p> Heights of the top three buildings:  <br> 45 <br> 25 <br> 24 </p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Solved IT !</h3>
                        <p class="php">
                        <?php
                            // $heights = array();
                            // while($line = fgets(STDIN)) {
                            //   rtrim($line, "\n");
                            //   array_push($heights, (int)$line);
                            // }
                            // rsort($heights);
                            // print("Heights of the top three buildings:\n");
                            // echo $heights[0]."\n";
                            // echo $heights[1]."\n";
                            // echo $heights[2]."\n";
                            echo "i comment it";
                        ?>
                        </p>
                    </div>
                    <div class="myCode">
                        <h3>Show my code</h3>
                        <p>
                            &lt?php <br>
                            $heights = array(); <br>
                            while($line = fgets(STDIN)) { <br>
                                rtrim($line, "\n"); <br>
                                array_push($heights, (int)$line); <br>
                            } <br>
                            rsort($heights); <br>
                            print("Heights of the top three buildings:\n");<br>
                            echo $heights[0]."\n"; <br>
                            echo $heights[1]."\n"; <br>
                            echo $heights[2]."\n"; <br>
                            ?&gt 
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <pThe solution code bring me this error</p>
                        <p>
                            <small>
                            Fatal error: Uncaught Error: Undefined constant "STDIN" in C:\MAMP\htdocs\PHP_dailyCoding\April\Day26\playCode.php:546 Stack trace: #0 {main} thrown in C:\MAMP\htdocs\PHP_dailyCoding\April\Day26\playCode.php on line 546
                            </small>

                        </p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-34.php">solution</a></p>
                        <p></p>
                    </div>
                </div>
            </section>
            <section class="exo47">
            <h2>Exercice 47</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to compute the digit number of sum of two given integers</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Input :</strong> Each test case consists of two non-negative integers x and y which are separated by a space in a line. <br>
0 = x, y = 1,000,000</p>
                        <p><strong>Output :</strong>  Digit number of sum of two given integers: 2</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Go Ahead</h3>
                        <p class="php">
                        <?php
                            echo "Too Difficult for me. I will put the code below";
                        ?>
                        </p>
                    </div>
                    <div class="myCode">
                        <h3>Showing my code</h3>
                        <p>
                            &lt?php <br>
                            while(true) { <br>
                                $inputs = explode(' ', trim(fgets(STDIN)));  <br>
                                if (!is_array($inputs) || count($inputs) < 2) {  <br>
                                    exit;  <br>
                                }  <br>
                                $a = $inputs[0];  <br>
                                $b = $inputs[1];  <br>
                                $d = numDigits($a + $b);  <br>
                                echo("Digit number of sum of two given integers: ");  <br>
                                echo $d . "\n"; <br>
                            }  <br>
                            function numDigits($n) { <br>
                                return (int)(log10($n) + 1);  <br>
                            }  <br>
                            ?&gt 
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-47.php">solution</a></p>
                        <p> I gave up; i didn't understand the statement. And straight looked at the solution.</p>
                    </div>
                </div>
            </section>
            <section class="exo48">
            <h2>Exercice 48</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to check whether three given lengths (integers) of three sides form a right triangle. <br> Print "Yes" if the given sides form a right triangle otherwise print "No"</h3>
                        <div class="resumeOutputExple">
                            <p><strong>Input :</strong> </p>
                            <p>Integers separated by a single space. <br> 1 = length of the side = 1,000</p>
                            <p><strong>Output :</strong> </p>
                            <p>Yes</p>
                        </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Let's try </h3>
                        <?php
                            $a = 5;
                            $b = 3;
                            $c = 4;
                            $a *= $a;
                            $b *= $b;
                            $c *= $c;
                            if($a + $b == $c || $a + $c == $b || $b + $c == $a){
                                echo "YES\n";
                            }
                            else
                            {
                                echo "NO\n";
                                }
                        ?>
                    </div>
                    <div class="myCode">
                        <h3> I show you my code</h3>
                        <p>
                            &lt?php <br>
                            $a = 5;
                            $b = 3;
                            $c = 4;
                            $a *= $a;
                            $b *= $b;
                            $c *= $c;
                            if($a + $b == $c || $a + $c == $b || $b + $c == $a){
                                echo "YES\n";
                            }
                            else
                            {
                                echo "NO\n";
                                }
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>Notice : i have to do it; more and more in order to be able to do it on purpose</p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-48.php">solution</a></p>
                        <p></p>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <p>© 2023 akkabb, Inc.</p>
        </footer>
    </div>
</body>
</html>