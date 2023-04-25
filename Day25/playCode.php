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
            <section class="exo25">
                <h2>Exercice 25</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to get the document root directory under which the current script is executing, as defined in the server's configuration file.</h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>I try my best : </h3>
                        <p class="php">
                            <?php 
                                echo $_SERVER['DOCUMENT_ROOT'];
                                // The website solution : 
                                // $rd = getenv('DOCUMENT_ROOT');
                                // echo $rd."\n";
                            ?>
                        </p>
                    </div>
                    <div class="myCode">
                        <h3>I show you my script : </h3>
                        <p>
                            &lt?php <br>
                                echo $_SERVER['DOCUMENT_ROOT']; <br>
                            ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>My point of view :</h3>
                        <p>
                           As i am not sure that it is the solution. I compare to the websit suggestion. It makes me know that there is an other way to solve it.
                        </p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-25.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo26">
            <h2>Exercice 26</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to get the information about the operating system PHP is running on.</h3>
                    <div class="answerWrapper">
                        <div class="mySol">
                            <h3>Lets GO!!</h3>
                            <p class="php">
                                <?php
                                echo php_uname() . "\n";
                                echo PHP_OS . "\n";
                                ?>
                            </p>
                        </div>
                        <div class="myCode">
                            <h3>My script :</h3>
                            <p>
                                &lt?php <br>
                                    echo php_uname() . "\n"; <br>
                                    echo PHP_OS . "\n"; <br>
                                ?&gt
                            </p>
                        </div>
                        <div class="comment_area">
                            <h3>My point of view :</h3>
                            <p>i googled it and this <a href="https://stackoverflow.com/questions/1482260/how-to-get-the-os-on-which-php-is-running">page</a> helped me to solve it </p>
                            <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-26.php">solution</a></p>
                        </div>
                    </div>
                </section>
                <section class="exo27">
                    <h2>Exercice 27</h2>
                    <div class="resumeWrapper">
                        <h3>Write a PHP script to print out all the credits for PHP.</h3>
                    </div>
                    <div class="answerWrapper">
                        <div class="mySol">
                            <H3>Try to solve it</H3>
                            <p class="php">
                                follw the <a href="php_credits.php">link</a> 
                            </p>
                            <?php
                               
                                // phpcredits(CREDITS_ALL);
                            ?> 
                        </div>
                        <div class="myCode">
                            <h3>Sample script : </h3>
                            <p>
                                &lt?php <br>
                                    phpcredits(CREDITS_ALL - CREDITS_FULLPAGE); <br>
                                ?&gt <br>
                            </p>
                        </div>
                        <div class="comment_area">
                            <h3>My point of view :</h3>
                            <p>
                                Without google, it was impossible to solve it, i didn't understand . Shoot Out to <a href="https://www.php.net/manual/en/function.phpcredits.php">php.net</a>
                            </p>
                            <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-27.php">solution</a></p>
                        </div>
                    </div>
                </section>
            <section class="exo28">
            <h2>Exercice 28</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to get the directory path used for temporary files.</h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>I will try my best :</h3>
                       <p class="php">
                        <?php
                            $temp_file = tempnam(sys_get_temp_dir(), 'Tux');

                            echo $temp_file;
                        ?>
                       </p>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                        <p>
                            &lt?php <br>
                            $temp_file = tempnam(sys_get_temp_dir(), 'Tux'); <br>
                            echo $temp_file; <br>
                            ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>I want to say thank you to the <a href="https://www.php.net/manual/en/function.sys-get-temp-dir.php">doc</a></p>
                        <p>The website <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-28.php">solution</a> </p>
                        <p></p>
                    </div>
                </div>
            </section>
            <section class="exo29">
            <h2>Exercice 29</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to get the names of the functions of a module</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Note : </strong> Find XML, JSON functions etc..</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Go GO GO !!!</h3>
                        <?php
                            print_r(get_extension_funcs("JSON"));
                            echo "\n";
                            print_r(get_extension_funcs("XML"))."\n";
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                        <p>
                            &lt?php <br>
                            print_r(get_extension_funcs("JSON")); <br>
                            echo "\n"; <br>
                            print_r(get_extension_funcs("XML"))."\n"; <br>
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>I didn't manage to solve this problem</p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-29.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo30">
            <h2>Exercice 30</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to get the time of the last modification of the current page.</h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Try to solve it :</h3>
                        <p class="php">
                            <?php
                                // To Get the last modification time
                                $last_modification="Last modified: " . date ("F d Y H:i:s.", getlastmod());

                                // To Show the last modification time
                                echo $last_modification;
                            ?>

                        </p>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                            <p>
                                &lt?php <br>
                                // To Get the last modification time <br>
                                $last_modification="Last modified: " . date ("F d Y H:i:s.", getlastmod()); <br>

                                // To Show the last modification time <br>
                                echo $last_modification; <br>
                                ?&gt
                            </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>I've done that exercices last week, but i didn't manage to solve it without my best help <span class="design_google">Google</span></p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-30.php">solution</a></p>
                    
                    </div>
                </div>
            </section>
            <section class="exo31">
            <h2>Exercice 31</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to swap two variables.</h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Let's GO !!</h3>
                        <p class="php">
                        <?php
                        //    $a = 9;
                        //    $b = 6;
                            function swap($a, $b)
                            {
                                $tmp = $a;
                                $a = $b;
                                $b = $tmp;

                                echo "first parameter value = $a \n";
                                echo '<br>';
                                echo "second parameter value = $b \n";
                                echo '<br>';
                            }

                        function displayAfterSwap($a, $b)
                        {
                            echo "first parameter value = $a \n";
                            echo '<br>';
                            echo "second parameter value = $b \n";
                            echo '<br>';
                            echo "<br>" . "After the swap : " . "<br>";
                            echo '<br>';
                            swap($a, $b);
                        }
                        displayAfterSwap(5, 2);
                        ?>
                        </p>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                            <p>
                                &lt?php <br>
                                function swap($a, $b) <br>
                             { <br>
                                $tmp = $a; <br>
                                $a = $b; <br>
                                $b = $tmp; <br>

                                echo "first parameter value = $a \n"; <br>
                                echo '&ltbr&gt'; <br>
                                echo "second parameter value = $b \n"; <br>
                                echo '&ltbr&gt'; <br>
                            } <br>

                        function displayAfterSwap($a, $b) <br>
                        { <br>
                            echo "first parameter value = $a \n"; <br>
                            echo '&ltbr&gt'; <br>
                            echo "second parameter value = $b \n"; <br>
                            echo '&ltbr&gt'; <br>
                            echo "&ltbr&gt" . "After the swap : " . "&ltbr&gt"; <br>
                            echo '&ltbr&gt'; <br>
                            swap($a, $b); <br>
                        } <br>
                        displayAfterSwap(5, 2); <br>
                                ?&gt
                            </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-19.php">solution</a></p>
                        <p></p>
                    </div>
                </div>
            </section>
            <section class="exo32">
            <h2>Exercice 32</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to check whether a number is an Armstrong number or not. Return true if the number is Armstrong otherwise return false..</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Note : An Armstrong number of three digits is an integer so that the sum of the cubes of its digits is equal to the number itself. <br> For example, 153 is an Armstrong number since 1**3 + 5**3 + 3**3 = 153</strong> .</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Ready , Go :</h3>
                        <?php
                            function armstrong_number($num) {
                                $sl = strlen($num);
                                $sum = 0;
                                $num = (string)$num;
                                for ($i = 0; $i < $sl; $i++) {
                                  $sum = $sum + pow((string)$num . $i,$sl);
                                }
                                if ((string)$sum == (string)$num) {
                                  return "True";
                                } else {
                                  return "False";
                                }
                              }
                              echo "Is 153 Armstrong number? ".armstrong_number(153);
                              echo "\nIs 21 Armstrong number? ".armstrong_number(21);
                              echo "\nIs 4587 Armstrong number? ".armstrong_number(4587);"\n";
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Showing my script :</h3>
                        <p>
                            &lt?php <br>
                                
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>That one even if i have the solution. stil dont understand. I need more practice on it!</p>
                        <p>There's a link to the solution given by the website : <a href="https://www.geeksforgeeks.org/how-to-remove-duplicate-values-from-array-using-php/">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo33">
            <h2>Exercice 33</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to convert word to digit.</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Input: </strong>zero;three;five;six;eight;one</p>
                        <p><strong>Output: </strong>035681</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Lest's Go </h3>
                    <?php
                       function word_digit($word) {
                        $warr = explode(';',$word);
                        $result = '';
                        foreach($warr as $value){
                            switch(trim($value)){
                                case 'zero':
                                    $result .= '0';
                                    break;
                                case 'one':
                                    $result .= '1';
                                    break;
                                case 'two':
                                    $result .= '2';
                                    break;
                                case 'three':
                                    $result .= '3';
                                    break;
                                case 'four':
                                    $result .= '4';
                                    break;
                                case 'five':
                                    $result .= '5';
                                    break;
                                case 'six':
                                    $result .= '6';
                                    break;
                                case 'seven':
                                    $result .= '7';
                                    break;
                                case 'eight':
                                    $result .= '8';
                                    break;
                                case 'nine':
                                    $result .= '9';
                                    break;    
                            }
                        }
                        return $result;
                    }
                    
                    echo word_digit("zero;three;five;six;eight;one")."<br>";
                    echo word_digit("seven;zero;one")."<br>";
                    ?>
                    </div>
                    <div class="myCode">
                        <h3>My Script : </h3>
                        <p>
                            &lt?php <br>
                            function word_digit($word) { <br>
                        $warr = explode(';',$word); <br>
                        $result = ''; <br>
                        foreach($warr as $value){ <br>
                            switch(trim($value)){ <br>
                                case 'zero':  <br>
                                    $result .= '0'; <br>
                                    break; <br>
                                case 'one':  <br>
                                    $result .= '1'; <br>
                                    break; <br>
                                case 'two': <br>
                                    $result .= '2'; <br>
                                    break;  <br>
                                case 'three':  <br>
                                    $result .= '3';  <br>
                                    break;  <br>
                                case 'four': <br>
                                    $result .= '4';  <br>
                                    break;  <br>
                                case 'five':  <br>
                                    $result .= '5';  <br>
                                    break;  <br>
                                case 'six':  <br>
                                    $result .= '6';  <br>
                                    break;  <br>
                                case 'seven': <br>
                                    $result .= '7';  <br>
                                    break;  <br>
                                case 'eight':  <br>
                                    $result .= '8';  <br>
                                    break;  <br>
                                case 'nine': <br>
                                    $result .= '9';  <br>
                                    break;    <br>
                            }  <br>
                        }  <br>
                        return $result;  <br>
                    }  <br>
                    
                    echo word_digit("zero;three;five;six;eight;one")."&ltbr&gt"; <br>
                    echo word_digit("seven;zero;one")."&ltbr&gt"; <br>
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>Didn't manage to solve it, i need to do it again and again</p>
                        <p>
                            my deliverance comes from this <a href="https://www.brainkart.com/article/A-PHP-program-to-convert-word-to-digit_40716/">link</a>.
                        </p>
                        <p>share the link to the <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-21.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo34">
            <h2>Exercice 34</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to check the bits of the two given positions of a number are same or not. </h3>
                    <div class="resumeOutputExple">
                        <p>112 - > 01110000 <br> Test 2nd and 3rd position <br> Result: True <br> Test 4th and 5th position <br> Result: False</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Solved IT !</h3>
                        <p class="php">
                        <?php
                            function test_bit_position($num, $pos1, $pos2) {
                                $pos1--;
                                $pos2--;
                                $bin_num = strrev(decbin($num));
                                if ($bin_num[$pos1] == $bin_num[$pos2]) {
                                  return "true";
                                } else {
                                  return "false";
                                }
                             }
                             echo test_bit_position(112,5,6)."\n";
                        ?>
                        </p>
                    </div>
                    <div class="myCode">
                        <h3>Show my code</h3>
                        <p>
                            &lt?php <br>
                            function test_bit_position($num, $pos1, $pos2) { <br>
                                $pos1--; <br>
                                $pos2--; <br>
                                $bin_num = strrev(decbin($num)); <br>
                                if ($bin_num[$pos1] == $bin_num[$pos2]) { <br>
                                  return "true";  <br>
                                } else {  <br>
                                  return "false"; <br>
                                }  <br>
                             }  <br>
                             echo test_bit_position(112,5,6)."\n";  <br>
                            ?&gt 
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>On this exercice, i was competely out of mind. Need to take time to understand and retry it.</p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-34.php">solution</a></p>
                        <p></p>
                    </div>
                </div>
            </section>
            <section class="exo35">
            <h2>Exercice 35</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to remove duplicates from a sorted list . </h3>
                    <div class="resumeOutputExple">
                        <p><strong>Input :</strong> (1,1,2,2,3,4,5,5).</p>
                        <p><strong>Output :</strong> (1,2,3,4,5).</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Go Ahead</h3>
                        <p class="php">
                        <?php
                            $a = [1,1,2,2,3,4,5,5];
                            
                            $a_unik = array_unique($a);
                            echo "[";
                            foreach($a_unik as $value)
                            {
                                echo $value . ", ";
                            }
                            echo "]";
                        ?>
                        </p>
                    </div>
                    <div class="myCode">
                        <h3>Showing my code</h3>
                        <p>
                            &lt?php <br>
                            $a = [1,1,2,2,3,4,5,5]; <br>
                            
                            $a_unik = array_unique($a); <br>
                            echo "["; <br>
                            foreach($a_unik as $value) <br>
                            { <br>
                                echo $value . ", "; <br>
                            } <br>
                            echo "]"; <br>
                            ?&gt 
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-35.php">solution</a></p>
                        <p>I try several test but <a href="https://www.geeksforgeeks.org/how-to-remove-duplicate-values-from-array-using-php/">this</a> help me solved it. </p>
                    </div>
                </div>
            </section>
            <section class="exo36">
            <h2>Exercice 36</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to test if a given string occurs at the end of another given string.</h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Let's try </h3>
                        <?php
                        $string = 'The lazy fox jumped over the fence';
                        if (str_ends_with($string, 'Fence')) {
                            echo 'The string ends with "Fence"';
                        } else {
                            echo '"Fence" was not found because the case does not match';
                        }
                        ?>
                    </div>
                    <div class="myCode">
                        <h3> I show you my code</h3>
                        <p>
                            &lt?php <br>
                            $string = 'The lazy fox jumped over the fence'; <br>
                            if (str_ends_with($string, 'Fence')) { <br>
                                echo 'The string ends with "Fence"'; <br>
                            } else { <br>
                                echo '"Fence" was not found because the case does not match'; <br>
                            } <br>
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>i just folow what suggest <a href="https://www.php.net/manual/en/function.str-ends-with.php">php.net</a></p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-36.php">solution</a></p>
                        <p>Now i saw the solution, i am asking myself, if its the same. My understanding let me keep it like that.</p>
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