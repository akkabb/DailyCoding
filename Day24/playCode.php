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
            <section class="exo13">
                <h2>Exercice 13</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to display string, values within a table. </h3>
                </div>
                <div class="resumeOutputExple">
                    <p><strong>Note : </strong> Use HTML table elements into echo</p>
                    <p><strong>Expected Output :</strong></p>
                    <table>
                            <tr>
                                <td>Salary of Mr.A is</td>
                                <td>1000$</td>
                            </tr>
                            <tr>
                                <td>Salary of Mr.B is</td>
                                <td>1200$</td>
                            </tr>
                            <tr>
                                <td>Salary of Mr.C is</td>
                                <td>14S00$</td>
                            </tr>
                        
                    </table>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>I try my best : </h3>
                        <?php 
                        echo "
                        <table>
                            <tr>
                                <td>Salary of Mr.A is</td>
                                <td>1000$</td>
                            </tr>
                            <tr>
                                <td>Salary of Mr.B is</td>
                                <td>1200$</td>
                            </tr>
                            <tr>
                                <td>Salary of Mr.C is</td>
                                <td>14S00$</td>
                            </tr>
                    
                        </table>
                        ";
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>I show you my script : </h3>
                        <p>
                            &lt?php <br>
                            &lttable&gt <br>
                                &lttr&gt <br>
                                    &lttd&gtSalary of Mr.A is&lt/td&gt <br>
                                    &lttd&gt1000$&lt/td&gt <br>
                                &lt/tr&gt <br>
                                &lttr&gt <br>
                                    &lttd&gtSalary of Mr.B is&lt/td&gt <br>
                                    &lttd&gt1200$&lt/td&gt <br>
                                &lt/tr&gt <br>
                                &lttr&gt <br>
                                    &lttd&gtSalary of Mr.C is&lt/td&gt <br>
                                    &lttd&gt14S00$&lt/td&gt <br>
                                &lt/tr&gt  <br>
                            &lt/table&gt <br>
                            ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>My point of view :</h3>
                        <p>
                           After taking a look at the solution, i can see that i didn't understand the instructions.
                        </p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-13.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo14">
            <h2>Exercice 14</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/").</h3>
                    <div class="answerWrapper">
                        <div class="mySol">
                            <h3>Lets GO!!</h3>
                            <?php
                             $all_lines = file('https://www.example.com/');
                             foreach ($all_lines as $line_num => $line)
                              {
                                  echo nl2br(htmlspecialchars($line) . "\n");
                              }
                            ?>
                        </div>
                        <div class="myCode">
                            <h3>My script :</h3>
                            <p>
                                &lt?php <br>
                                    $all_lines = file('https://www.example.com/'); <br>
                                    foreach ($all_lines as $line_num => $line) <br>
                                    { <br>
                                        echo nl2br(htmlspecialchars($line) . "\n"); <br>
                                    }    <br>
                                ?&gt
                            </p>
                        </div>
                        <div class="comment_area">
                            <h3>My point of view :</h3>
                            <p>I googled it and it takes a lot of time for me to understand it. Need to look at the solution offer by this website : <a></a></p>
                            <p>There's a link to the solution given by the website : <a href="https://www.geeksforgeeks.org/how-to-get-the-source-code-of-a-web-page-using-php/">solution</a></p>
                        </div>
                    </div>
                </section>
                <section class="exo15">
                    <h2>Exercice 15</h2>
                    <div class="resumeWrapper">
                        <h3>Write a PHP script to get last modified information of a file.</h3>
                    </div>
                    <div class="resumeOutputExple">
                        <p><strong>Sample filename :</strong> php-basic-exercises.php</p>
                        <p><strong>Sample Output :</strong> Last modified Monday, 26th June, 2017, 12:43pm</p>
                    </div>
                    <div class="answerWrapper">
                        <div class="mySol">
                            <H3>Try to solve it</H3>
                            <?php
                                $file = 'playCode.php';
                                echo '<strong>Sample filename :</strong>' . "\n";
                                echo $file . "\n";
                                echo '<br>';
                                echo '<strong>Sample Output :</strong>' . "\n";
                                echo "Last modified " . date("l, jS F, Y, g:i a", filemtime('playCode.php'));
                            ?>
                        </div>
                        <div class="myCode">
                            <h3>Sample script : </h3>
                            <p>
                                &lt?php <br>
                                $file = 'playCode.php'; <br>
                                echo '&ltstrong&gtSample filename :&lt/strong&gt' . "\n"; <br>
                                echo $file . "\n"; <br>
                                echo '&ltbr&gt';
                                echo '&ltstrong&gtSample Output :&lt/strong&gt' . "\n"; <br>
                                echo "Last modified " . date("l, jS F, Y, g:i a", filemtime('playCode.php')); <br>
                                ?&gt <br>
                            </p>
                        </div>
                        <div class="comment_area">
                            <h3>My point of view :</h3>
                            <p>
                                
                            </p>
                            <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-15.php">solution</a></p>
                        </div>
                    </div>
                </section>
            <section class="exo16">
            <h2>Exercice 16</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to count number of lines in a file.</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Note : </strong> Store a text file name into a variable and count the number of lines of text it has.</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>I will try my best :</h3>
                       
                        <?php
                            $txt = file_get_contents("nbrLines.txt", FILE_IGNORE_NEW_LINES);
                            echo substr_count($txt, "\n");
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                        <p>
                            &lt?php <br>
                                $txt = file_get_contents("nbrLines.txt", FILE_IGNORE_NEW_LINES); <br>
                                echo substr_count($txt, "\n"); <br>
                            ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>I google it and we can compare it with the <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-16.php">solution</a> </p>
                        <p>There's a link to the solution given by the website : <a href="https://java2blog.com/php-count-lines-file/#:~:text=Use%20the%20file()%20function,of%20elements%20in%20the%20array.">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo17">
            <h2>Exercice 17</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to print current PHP version.</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Note : </strong> Do not use phpinfo() function.</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Go GO GO !!!</h3>
                        <?php
                            echo "the current PHP version is " . phpversion() . "\n";
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                        <p>
                            &lt?php <br>
                                echo "the current PHP version is " . phpversion(); <br>
                            ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-17.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo18">
            <h2>Exercice 18</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to delay the program execution for the given number of seconds.</h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Try to solve it :</h3>
                        <?php
                            // echo date('h:i:s') . "\n";
                            // sleep(5);
                            // echo date('h:i:s') . "\n";
                                echo "so as not to delay execution i comment it. <br> Below you can see my code.";
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                            <p>
                                &lt?php <br>
                                    echo date('h:i:s') . "\n"; <br>
                                    sleep(5); <br>
                                    echo date('h:i:s') . "\n"; <br>
                                ?&gt
                            </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-18.php">solution</a></p>
                        <p>This page helps me to solve the problem : <a href="https://www.php.net/manual/en/function.sleep.php">php.net</a></p>
                    </div>
                </div>
            </section>
            <section class="exo19">
            <h2>Exercice 19</h2>
                <div class="resumeWrapper">
                    <h3>Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers.</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Sample Output : </strong></p>
                        <p>A01 <br> A02 <br>  A03 <br> A04 <br>  A05</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Let's GO !!</h3>
                        <?php
                            $d = 'A00';
                            $i = 0;
                            while ($i <= 5)
                                {
                                    echo $d++ . '<br>';
                                    $i++;
                                }
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                            <p>
                                &lt?php <br>
                                    $d = 'A00'; <br>    
                                    $i = 0; <br>
                                    while ($i <= 5) break
                                    {  <br>
                                        echo $d++ . '&ltbr&gt'; <br>
                                        $i++; <br>
                                    } <br>
                                ?&gt
                            </p>
                    </div>
                    <div class="comment_area">
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-19.php">solution</a></p>
                        <p>I try my best to find a solution and as it works. I am ok with it. And i appreciate to see that there is an other way to solve it</p>
                    </div>
                </div>
            </section>
            <section class="exo20">
            <h2>Exercice 20</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to get the last occurred error.</h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Ready , Go :</h3>
                        <?php
                            echo $x;
                            $error = error_get_last();
                            print_r($error);
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Showing my script :</h3>
                        <p>
                            &lt?php <br>
                                echo $x; <br>
                                $error = error_get_last(); <br>
                                print_r($error);  <br>
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-20.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo21">
            <h2>Exercice 21</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator.</h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Lest's Go </h3>
                    <?php
                        function trinary_Test($n){
                            $r = $n > 30
                            ? "greater than 30"
                            : ($n > 20
                            ? "greater than 20"
                            : ($n >10
                            ? "greater than 10"
                            : "Input a number atleast greater than 10!")); 
                            echo $n." : ".$r."\n";
                            }
                            trinary_Test(32);
                            trinary_Test(21);
                            trinary_Test(12);
                            trinary_Test(4);
                    ?>
                    </div>
                    <div class="myCode">
                        <h3>My Script : </h3>
                        <p>
                            &lt?php <br>
                            function trinary_Test($n){ <br>
                            $r = $n > 30 <br>
                            ? "greater than 30" <br>
                            : ($n > 20 <br>
                            ? "greater than 20" <br>
                            : ($n >10 <br>
                            ? "greater than 10" <br>
                            : "Input a number atleast greater than 10!")); <br>
                            echo $n." : ".$r."\n"; <br>
                            } <br>
                            trinary_Test(32); <br>
                            trinary_Test(21); <br>
                            trinary_Test(12); <br>
                            trinary_Test(4);   <br>
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>Didn't manage to solve it, i need to do it again and again</p>
                        <p>share the link to the <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-21.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo22">
            <h2>Exercice 22</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to get the full URL. </h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Solved IT !</h3>
                        <?php
                            $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            echo $actual_link;
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Show my code</h3>
                        <p>
                            &lt?php <br>
                                $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; <br>
                                echo $actual_link; <br>
                                ?&gt 
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-22.php">solution</a></p>
                        <p></p>
                    </div>
                </div>
            </section>
            <section class="exo23">
            <h2>Exercice 23</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to compare the PHP version . </h3>
                    <div class="resumeOutputExple">
                        <p><strong>Note :</strong> Use version_compare() function and PHP_VERSION constant.</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Go Ahead</h3>
                        <?php
                            if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
                                echo 'J\'ai au moins la version 7.0.0 de PHP ; ma version : ' . PHP_VERSION . "\n";
                            }
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Showing my code</h3>
                        <p>
                            &lt?php <br>
                            if (version_compare(PHP_VERSION, '7.0.0') >= 0) { <br>
                                echo 'J\'ai au moins la version 7.0.0 de PHP ; ma version : ' . PHP_VERSION . "\n"; <br>
                            }   <br>
                            ?&gt 
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-23.php">solution</a></p>
                        <p>this is the php bible <a href="https://www.php.net/manual/fr/function.version-compare.php">php.net</a></p>
                    </div>
                </div>
            </section>
            <section class="exo24">
            <h2>Exercice 24</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to get the name of the owner of the current PHP script</h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Let's try </h3>
                        <?php
                           echo get_current_user();
                        ?>
                    </div>
                    <div class="myCode">
                        <h3> I show you my code</h3>
                        <p>
                            &lt?php <br>
                                echo get_current_user(); <br>
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-24.php">solution</a></p>
                        <p>Not easy for me. Need to <a href="https://www.php.net/manual/en/function.get-current-user.php">google</a> it and see the solution to be more confident. </p>
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