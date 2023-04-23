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
            <section class="exo1">
                <h2>Exercice 1</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to get the PHP version and configuration information</h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>I try my best : </h3>
                        <?php 
                        // echo 'My php version is ';
                        // var_dump(phpinfo());
                        // echo '<br>';

                        echo 'I comment the solution, because it takes to much space!';
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>I show you my script : </h3>
                        <p>
                            &lt?php <br>
                                echo 'My php version is '; <br>
                                var_dump(phpinfo()); <br>
                            ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <p class="comment_style">
                            I didn't know how to solve it. I google the resume. And was estonished to find phpinfo().
                            I like to learn everyday, something new.
                        </p>
                        <p>There's a ink to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-1.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo2">
            <h2>Exercice 2</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to display the following strings</h3>
                    <div class="resumeExple">
                        <p><strong>Sample String :</strong></p>
                        <p>'Tomorrow I \'ll learn PHP global variables.' <br>
                            'This is a bad command : del c:\\*.*'</p>
                        </div>
                    <div class="resumeOutputExple">
                        <p><strong>Expected Output :</strong></p>
                        <p>Tomorrow I 'll learn PHP global variables. <br>
                            This is a bad command : del c:\*.* </p>
                        </div>
                    </div>
                    <div class="answerWrapper">
                        <div class="mySol">
                            <h3>Lets GO!!</h3>
                            <?php
                                echo "Tomorrow I 'll learn PHP global variables." . '<br>' . "This is a bad command : del c:\*.* ";
                            ?>
                        </div>
                        <div class="myCode">
                            <h3>My script :</h3>
                            <p>
                                &lt?php <br>
                                    echo "Tomorrow I 'll learn PHP global variables." . '&ltbr&gt' . "This is a bad command : del c:\*.* "; <br>    
                                ?&gt
                            </p>
                        </div>
                        <div class="comment_area">
                            <p>basic one. help to practice de differenc between simple and double quote </p>
                        </div>
                    </div>
                </section>
                <section class="exo3">
                    <h2>Exercice 3</h2>
                    <div class="resumeWrapper">
                        <h3>$var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document.</h3>
                    </div>
                    <div class="resumeOutputExple">
                        <p><strong>Sample Output :</strong></p>
                        <p>PHP Tutorial
PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
Go to the PHP Tutorial.</p>
                    </div>
                    <div class="answerWrapper">
                        <div class="mySol">
                            <H3>Try to solve it</H3>
                            <?php
                                $var = 'PHP tutorial';
                                echo '<h3>' . $var . '</h3>';
                                echo '<a href="#here">' . 'Go to this area ' . $var .'</a>';
                            ?>
                            <div id="here">

                            </div>
                        </div>
                        <div class="myCode">
                            <h3>Sample script : </h3>
                            <p>
                                &lt?php <br>
                                $var = 'PHP tutorial'; <br>
                                echo '<h3>' . $var . '</h3>'; <br>
                                echo '<a href="#here">' . 'Go to this area ' . $var .'</a>'; <br> 
                                ?&gt
                            </p>
                        </div>
                        <div class="comment_area">
                            <p>
                                I didn't did it like it ask. but i understood what it means.
                            </p>
                        </div>
                    </div>
                </section>
            <section class="exo4">
            <h2>Exercice 4</h2>
                <div class="resumeWrapper">
                    <h3>Create a simple HTML form and accept the user name and display the name through PHP echo statement.</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Sample output of the HTML form : </strong></p>
                        <p class="like_h3_tag">Please Input your name</p>
                        <input type="text" name="" id="">
                        <input type="submit" value="submit name">
                        <p class="like_h5_tag">Hello</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>I will try my best :</h3>
                        <div class="user_Name">
                            <p class="fname">Please input your name :</p>
                            <form action="" method="post">
                                <input type="text" name="fname" id="">
                                <input type="submit" value="Submit Name">
                            </form>
                        </div>
                        <?php
                            // if (isset($_POST['fname']))
                            // {
                            //     echo '<p>' . 'Hello ' . $_POST['fname']. '</p>';
                            //     echo '<br>';
                            // }
                            echo "i comment the php script in order to avoid the form ";
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                        <p>
                        &ltdiv class="user_Name"&gt <br>
                        &ltp class="fname">Please input your name :&lt/p&gt <br>
                        &ltform action="" method="post"&gt <br>
                        &ltinput type="text" name="fname" id=""&gt <br>
                        &ltinput type="submit" value="Submit Name"&gt <br>
                        &lt/form&gt <br>
                        &lt/div&gt 
                        <br><br>
                        &lt?php <br>
                            if (isset($_POST['fname'])) <br>
                            { <br>
                                echo '<p>' . 'Hello ' . $_POST['fname']. '</p>'; <br>
                            } <br>
                        ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <p>it helped me to know the global $_POST</p>
                    </div>
                </div>
            </section>
            <section class="exo5">
            <h2>Exercice 5</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to get the client IP address.</h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Go GO GO !!!</h3>
                        <?php
                            echo 'the client IP address is : ';
                            echo $_SERVER['REMOTE_ADDR'];
                        ?>
                    </div>
                    <div class="comment_area"></div>
                </div>
            </section>
            <section class="exo6">
            <h2>Exercice 6</h2>
                <div class="resumeWrapper">
                    <h3>Write a simple PHP browser detection script.</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Sample Output : </strong></p>
                        <p>Sample Output : Your User-Agent is: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Try to solve it :</h3>
                        <?php
                            echo 'Your User-Agent is : ' . $_SERVER['HTTP_USER_AGENT'];
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Showing my first :</h3>
                        <p>echo 'Your User-Agent is : ' . $_SERVER['HTTP_USER_AGENT'];</p>
                    </div>
                    <div class="comment_area">
                        <p>I google it, it helped me to find the solution!</p>
                    </div>
                </div>
            </section>
            <section class="exo7">
            <h2>Exercice 7</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script to get the current file name.</h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Let's GO !!</h3>
                        <?= getcwd();?>
                    </div>
                    <div class="comment_area">
                        <p>I google it to and this <a href="https://www.php.net/manual/en/function.getcwd.php">link</a> helped me!</p>
                    </div>
                </div>
            </section>
            <section class="exo8">
            <h2>Exercice 8</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'.</h3>
                    <div class="resumeOutputExple">
                        <p>
                        List of components : Scheme, Host, Path <br>
                        Expected Output : <br>
                        Scheme : http <br>
                        Host : www.w3resource.com <br>
                        Path : /php-exercises/php-basic-exercises.php <br>
                        </p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Ready , Go :</h3>
                        <?php
                            $url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
                            $arrayUrl =parse_url($url);
                            foreach ($arrayUrl as $arr => $s)
                            {
                                echo $arr .' : ' . $s;
                                echo '<br>';
                            }
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Showing my script :</h3>
                        <p>
                        $url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'; <br>
                            $arrayUrl =parse_url($url); <br>
                            foreach ($arrayUrl as $arr => $s) <br>
                            { <br>
                                echo $arr .' : ' . $s; <br>
                                echo '&ltbr&gt'; <br>
                            } <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <p>I can't manage without google. Nice to search and find the sol</p>
                    </div>
                </div>
            </section>
            <section class="exo9">
            <h2>Exercice 9</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script, which changes the color of the first character of a word</h3>
                    <div class="resumeOutputExple">
                        <p>
                        Sample string : PHP Tutorial <br>
                        Expected Output : <br>
                        PHP Tutorial <br>
                        </p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol"></div>
                    <div class="comment_area"></div>
                </div>
            </section>
            <section class="exo10">
            <h2>Exercice 10</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script, to check whether the page is called from 'https' or 'http'. </h3>
                </div>
                <div class="answerWrapper">
                    <div class="mySol"></div>
                    <div class="comment_area"></div>
                </div>
            </section>
            <section class="exo11">
            <h2>Exercice 11</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP script, to check whether the page is called from 'https' or 'http'. </h3>
                    <div class="resumeOutputExple">
                        <p><strong>Expected Output :</strong></p>
                        <p>Redirect the user to https://www.w3resource.com/</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol"></div>
                    <div class="comment_area"></div>
                </div>
            </section>
            <section class="exo12">
            <h2>Exercice 12</h2>
                <div class="resumeWrapper">
                    <h3>Write a simple PHP program to check that emails are valid.</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Hint :</strong></p>
                        <p>Use FILTER_VALIDATE_EMAIL filter that validates value as an e-mail address.</p>
                        <p><strong>Hint :</strong></p>
                        <p>The PHP documentation does not say that FILTER_VALIDATE_EMAIL should pass the RFC5321.</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol"></div>
                    <div class="comment_area"></div>
                </div>
            </section>
        </main>
        <footer>
            <p>© 2023 akkabb, Inc.</p>
        </footer>
    </div>
</body>
</html>