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
            <section class="exo61">
                <h2>Exercice 61</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program which reads a text (only alphabetical characters and spaces.) and prints two words. The first one is the word which is arise most frequently in the text. The second one is the word which has the maximum number of letters.:</h3>
                    <div class="resumeOutputExple">
                        <p><strong>note : </strong>  <br>A word is a sequence of letters which is separated by the spaces. </p>
                        <p><strong>Input : </strong>  <br>A text is given in a line with following condition: </p>
                        <p> a. The number of letters in the text is less than or equal to 1000. </p>
                        <p> b. The number of letters in a word is less than or equal to 32. </p>
                        <p> c. There is only one word which is arise most frequently in given text. </p>
                        <p> d. There is only one word which has the maximum number of letters in given text. </p>
                        <p><strong>Sample Input : </strong>  <br>Thank you for your comment and your participation.. </p>
                        <p><strong>Sample Output : </strong>  your participation. </p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>I try my best : </h3>
                        <p class="php">
                            <?php 
                                
                            ?>
                        </p>
                    </div>
                    <div class="myCode">
                        <h3>I show you my script : </h3>
                        <p>
                            &lt?php <br>
                            
                            ?&gt
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>My point of view :</h3>
                        <p>
                           
                        </p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-61.php">solution</a></p>
                        <p></p>
                    </div>
                </div>
            </section>
            <section class="exo62">
            <h2>Exercice 62</h2>
                    <div class="resumeWrapper">
                        <h3>Write a PHP program which reads the two adjoined sides and the diagonal of a parallelogram and check whether the parallelogram is a rectangle or a rhombus.</h3>
                        <p>
                        According to Wikipedia-parallelograms: In Euclidean geometry, a parallelogram is a simple (non-self-intersecting) quadrilateral with two pairs of parallel sides. The opposite or facing sides of a parallelogram are of equal length and the opposite angles of a parallelogram are of equal measure.
rectangles: In Euclidean plane geometry, a rectangle is a quadrilateral with four right angles. It can also be defined as an equiangular quadrilateral, since equiangular means that all of its angles are equal (360o/4 = 90o). It can also be defined as a parallelogram containing a right angle.
rhombus: In plane Euclidean geometry, a rhombus (plural rhombi or rhombuses) is a simple (non-self-intersecting) quadrilateral whose four sides all have the same length. Another name is equilateral quadrilateral, since equilateral means that all of its sides are equal in length. The rhombus is often called a diamond, after the diamonds suit in playing cards which resembles the projection of an octahedral diamond, or a lozenge, though the former sometimes refers specifically to a rhombus with a 60o angle (see Polyiamond), and the latter sometimes refers specifically to a rhombus with a 45o angle.
                        </p>
                        <div class="resumeOutputExple">
                            <p><strong>Input : </strong> Two adjoined sides and the diagonal. <br> 1 = ai, bi, ci = 1000, ai + bi > ci </p>
                            <p><strong>Sample Input : </strong> 4,5,6 <br> 6,6,9</p>
                            <p><strong>Sample Output : </strong> This is rectangles.</p>
                        </div>
                    </div>    
                    <div class="answerWrapper">
                        <div class="mySol">
                            <h3>Lets GO!!</h3>
                            <p class="php">
                                <?php
                                   
                                ?>
                            </p>
                        </div>
                        <div class="myCode">
                            <h3>My script :</h3>
                            <p>
                                &lt?php <br>
                                    
                                ?&gt
                            </p>
                        </div>
                        <div class="comment_area">
                            <h3>My point of view :</h3>
                           <p>  </p>
                            <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-62.php">solution</a></p>
                        </div>
                    </div>
                </section>
                <section class="exo63">
                    <h2>Exercice 63</h2>
                    <div class="resumeWrapper">
                        <h3>Write a PHP program to replace a string "Python" with "PHP" and "Python" with "PHP" in a given string. .</h3>
                        <div class="resumeOutputExple">
                            <p><strong>Input :</strong> English letters (including single byte alphanumeric characters, blanks, symbols) are given on one line. The length of the input character string is 1000 or less.</p>
                            <p><strong>Sample Input :</strong> <br> PHP is popular than Python </p>
                            <p><strong>Sample Output :</strong> <br> Python is popular than PHP.</p>
                        </div>
                    </div>
                    <div class="answerWrapper">
                        <div class="mySol">
                            <H3>Try to solve it</H3>
                            <p class="php">
                            <?php
                                
                            ?>  
                            </p>
                        </div>
                        <div class="myCode">
                            <h3>Sample script : </h3>
                            <p>
                                &lt?php <br>
                                
                                ?&gt <br>
                            </p>
                        </div>
                        <div class="comment_area">
                            <h3>My point of view :</h3>
                            <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-39.php">solution</a></p>
                        </div>
                    </div>
                </section>
            <section class="exo64">
            <h2>Exercice 64</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to find the difference between the largest integer and the smallest integer which are created by 8 numbers from 0 to 9. The number that can be rearranged shall start with 0 as in 00135668..</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Input :</strong> <br>  The difference between the largest integer and the smallest integer.</p>
                        <p><strong>Sample Intput :</strong> <br> 1 <br> 34567829 </p>
                        <p><strong>Sample Output :</strong> <br>Difference between the largest integer and the smallest integer: <br>75308643</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>I will try my best :</h3>
                       <p class="php">
                        <?php
                           
                        ?>
                       </p>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                        <p>
                            &lt?php <br>
                            
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p></p>
                        <p>The website <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-64.php">solution</a> </p>
                        <p></p>
                    </div>
                </div>
            </section>
            <section class="exo65">
            <h2>Exercice 65</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to compute the sum of first n given prime numbers.</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Input : </strong> <br>n ( n = 10000). Input 0 to exit the program. </p>
                        <p><strong>Sample Input : </strong> <br>25 <br>0 </p>
                        <p><strong>Sample Output : </strong> <br> Sum of first 25 prime numbers:1060 </p>
                        
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Go GO GO !!!</h3>
                        <?php
                            
                        ?>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                        <p>
                            &lt?php <br>
                            
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>I didn't manage to solve it</p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-65.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo66">
            <h2>Exercice 66</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program that accept an even number (n should be greater than or equal to 4 and less than or equal to 50000, Goldbach number) from the user and create a combinations that express the given number as a sum of two prime numbers. Print the number of combinations.</h3>
                    <p>
                    Goldbach number: A Goldbach number is a positive even integer that can be expressed as the sum of two odd primes.[4] Since four is the only even number greater than two that requires the even prime 2 in order to be written as the sum of two primes, another form of the statement of Goldbach's conjecture is that all even integers greater than 4 are Goldbach numbers.
The expression of a given even number as a sum of two primes is called a Goldbach partition of that number. The following are examples of Goldbach partitions for some even numbers:
                    </p>
                    <p>
                    6 = 3 + 3 <br> 8 = 3 + 5 <br> 10 = 3 + 7 = 5 + 5 <br> 12 = 7 + 5 <br> ... <br> 100 = 3 + 97 = 11 + 89 = 17 + 83 = 29 + 71 = 41 + 59 = 47 + 53 <br>
                    </p>
                    <div class="resumeOutputExple">
                        
                        <p><strong>Sample Input :</strong> 100 <br> 0</p>
                        <p><strong>Sample Output :</strong> Number of combinations: 6</p>
                        
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Try to solve it :</h3>
                        <p class="php">
                            <?php
                             
                            ?>

                        </p>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                            <p>
                                &lt?php <br>
                                    
                                ?&gt
                            </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p></p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-66.php">solution</a></p>
                    
                    </div>
                </div>
            </section>
            <section class="exo67">
            <h2>Exercice 67</h2>
                <div class="resumeWrapper">
                    <h3> if you draw a straight line on a plane, the plane is divided into two regions. For example, if you pull two straight lines in parallel, you get three areas, and if you draw vertically one to the other you get 4 areas. Write a PHP program to create maximum number of regions obtained by drawing n given straight lines.</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Input : </strong>(1 = n = 10,000) </p>
                        <p><strong>Sample Input : </strong> <br> 5</p>
                        <p><strong>Sample Output : </strong> <br> Maximum number of regions: 16</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Let's GO !!</h3>
                        <p class="php">
                        <?php
                            
                        ?>
                        </p>
                    </div>
                    <div class="myCode">
                        <h3>Show my script :</h3>
                            <p>
                                &lt?php <br>
                               
                                ?&gt
                            </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-67.php">solution</a></p>
                        <p></p>
                    </div>
                </div>
            </section>
            <section class="exo68">
            <h2>Exercice 68</h2>
                <div class="resumeWrapper">
                    <h3>There are four different points on a plane, P(xp,yp), Q(xq, yq), R(xr, yr) and S(xs, ys). Write a PHP program to test whether AB and CD are orthogonal or not</h3>
                    <div class="resumeOutputExple">
                        <p>xp,yp, xq, yq, xr, yr, xs and ys are -100 to 100 respectively and each value can be up to 5 digits after the decimal point It is given as a real number including the number of.</p>
                        <p><strong>Sample Input :</strong> <br> 5 </p>
                        <p><strong>Sample Output : </strong> <br> Maximum number of regions: 16.</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Ready , Go :</h3>
                        <?php
                            
                              
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
                        <p></p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-68.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo69">
            <h2>Exercice 69</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to sum of all numerical values (positive integers) embedded in a sentence.</h3>
                    <div class="resumeOutputExple">
                        <p>Sentences with positive integers are given over multiple lines. Each line is a character string containing one-byte alphanumeric characters, symbols, spaces, or an empty line. However the input is 80 characters or less per line and the sum is 10,000 or less.</p>
                        <p><strong>Sample Input :</strong> <br>5 apple and 10 orange are rotten in the basket</p>
                        <p><strong>Sample Output</strong>Maximum number of regions: 16 </p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Lest's Go </h3>
                    <?php
                       
                    ?>
                    </div>
                    <div class="myCode">
                        <h3>My Script : </h3>
                        <p>
                            &lt?php <br>
                            
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>
                           
                        </p>
                        <p>share the link to the <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-69.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo70">
            <h2>Exercice 70</h2>
                <div class="resumeWrapper">
                    <h3>Record section of ABC company records the customer number and the trading date for each month. Write a PHP program to find the customer number that has traded for the second consecutive for the second consecutive month from last month and the number of transactions. </h3>
                    <p> 
                    The data of this month and the data of last month are separated by a blank line of one line and given. <br>
                    Transaction format: <br>
                    c1 , d1 <br>
                    c2 , d2 <br>
                    ... <br>
                    ... <br>
                    ci (1 = ci = 1,000) is an integer represents the customer number, di (1 = di = 31) is an integer represents the trading date. <br>
                    </p>
                    <div class="resumeOutputExple">
                        <p><strong>Sample Input :</strong> 125,10 <br>55,12 <br>34,14 <br> <br> 125,3 <br> 55,4 <br> 125,5 </p>
                        <p><strong>Sample Output :</strong> <br> Sum of the numeric values: 15</p>
                    
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Solved IT !</h3>
                        <p class="php">
                        <?php
                            
                        ?>
                        </p>
                    </div>
                    <div class="myCode">
                        <h3>Show my code</h3>
                        <p>
                            &lt?php <br>
                            
                            ?&gt 
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p></p>
                        <p>
                           
                        </p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-70.php">solution</a></p>
                        <p></p>
                    </div>
                </div>
            </section>
            <section class="exo71">
            <h2>Exercice 71</h2>
                <div class="resumeWrapper">
                    <h3> There are 10 vertical and horizontal squares on a plane. Each square is painted blue and green. Blue represents the sea, and green represents the land. When two green squares are in contact with the top and bottom, or right and left, they are said to be ground. The area created by only one green square is called "island". For example, there are five islands in the figure below.
Write a PHP program to read the mass data and find the number of islands. .</h3>
                    <p>A single data set is represented by 10 rows of 10 numbers representing green squares as 1 and blue squares as zeros.</p>
                    <div class="resumeOutputExple">
                        <p><strong>Sample Input :</strong> <br> 1100000111 <br>
1000000111 <br>
0000000111 <br>
0010001000 <br>
0000011100 <br>
0000111110 <br>
0001111111 <br>
1000111110 <br>
1100011100 <br>
1110001000</p>
                        <p><strong> Sample Output :</strong>  Number of islands:  <br> 5</p>
                    </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Go Ahead</h3>
                        <p class="php">
                        <?php
                            
                        ?>
                        </p>
                    </div>
                    <div class="myCode">
                        <h3>Showing my code</h3>
                        <p>
                            &lt?php <br>
                            
                            ?&gt 
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-71.php">solution</a></p>
                        <p> </p>
                    </div>
                </div>
            </section>
            <section class="exo72">
            <h2>Exercice 72</h2>
                <div class="resumeWrapper">
                    <h3>When character are consecutive in a string , it is possible to shorten the character string by replacing the character with a certain rule. For example, in the case of the character string YYYYY, if it is expressed as # 5 Y, it is compressed by one character.
Write a PHP program to restore the original string by entering the compressed string with this rule. However, the # character does not appear in the restored character string.</h3>
                        <div class="resumeOutputExple">
                            <p><strong>Note:</strong> The original sentences are uppercase letters, lowercase letters, numbers, symbols, less than 100 letters, and consecutive letters are not more than 9 letters.</p>
                            <p><strong>Input :</strong> Multiple character strings are given. One string is given per line</p>
                           
                            <p><strong>Sample Output :</strong>  <br> 88888888 + 1 = 100000000</p>
                        </div>
                </div>
                <div class="answerWrapper">
                    <div class="mySol">
                        <h3>Let's try </h3>
                        <?php
                           
                        ?>
                    </div>
                    <div class="myCode">
                        <h3> I show you my code</h3>
                        <p>
                            &lt?php <br>
                            
                            ?&gt <br>
                        </p>
                    </div>
                    <div class="comment_area">
                        <h3>my point of view</h3>
                        <p></p>
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-72.php">solution</a></p>
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