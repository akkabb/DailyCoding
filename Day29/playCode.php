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
            <section class="exo73">
                <h2>Exercice 73</h2>
                <div class="resumeWrapper">
                    <h3>A convex polygon is a simple polygon in which no line segment between two points on the boundary ever goes outside the polygon. Equivalently, it is a simple polygon whose interior is a convex set. In a convex polygon, all interior angles are less than or equal to 180 degrees, while in a strictly convex polygon all interior angles are strictly less than 180 degrees.
<br>  Write a PHP program that compute the area of the polygon . The vertices have the names vertex 1, vertex 2, vertex 3, ... vertex n according to the order of edge connections. However, n is 3 or more and 20 or less. You can also use the following formula to calculate the area S from the lengths a, b, and c of the triangle's three sides.</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Input : </strong>  <br>A text is given in a line with following condition: </p>
                        <p> 1.0, 0.0</p>
                        <p> 0.0, 0.0</p>
                        <p> 1.0, 1.0</p>
                        <p> 2.0, 0.0</p>
                        <p> -1.0, 1.0</p>
                        
                        <p><strong>Sample Output : </strong> <br> Area of the polygon: <br> 1.5 </p>
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
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-73.php">solution</a></p>
                        <p></p>
                    </div>
                </div>
            </section>
            <section class="exo74">
            <h2>Exercice 74</h2>
                    <div class="resumeWrapper">
                        <h3>Internet search engine giant, such as Google accepts web pages around the world and classify them, creating a huge database. The search engines also analyze the search keywords entered by the user and create inquiries for database search. In both cases, complicated processing is carried out in order to realize efficient retrieval, but basics are all cutting out words from sentences.
Write a PHP program to cut out words of 3 to 6 characters length from a given sentence not more than 1024 characters</h3>
                       
                        <div class="resumeOutputExple">
                            <p><strong>Input : </strong>  <br> English sentences consisting of delimiters and alphanumeric characters are given on one line. </p>
                            <p><strong>Sample Input : </strong>  <br> The quick brown fox</p>
                            <p><strong>Sample Output : </strong> <br> Original string: <br> The quick brown fox <br> Words  of 3 to 6 characters length: The quick brown fox </p>
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
                            <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-74.php">solution</a></p>
                        </div>
                    </div>
                </section>
                <section class="exo75">
                    <h2>Exercice 75</h2>
                    <div class="resumeWrapper">
                        <h3>Arrange integers (0 to 99) as narrow hilltop, as illustrated in Figure 1. Reading such data representing huge, when starting from the top and proceeding according to the next rule to the bottom. Write a PHP program that compute the maximum value of the sum of the passing integers..</h3>
                        <div class="resumeOutputExple">
                            <p><strong>Input :</strong> English lette</p>
                            <p><strong>Sample Input :</strong> <br>  
                            8 <br>4, 9 <br>9, 2, 1 <br>3, 8, 5, 5 <br>5, 6, 3, 7, 6 <br>3, 8, 5, 5 <br> 9, 2, 1 <br> 4, 9 <br> 8
                            </p>
                            <p><strong>Sample Output :</strong> <br> 64</p>
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
                            <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-75.php">solution</a></p>
                        </div>
                    </div>
                </section>
            <section class="exo76">
            <h2>Exercice 76</h2>
                <div class="resumeWrapper">
                    <h3>Your task is to develop a small part of spreadsheet software.
Write a PHP program which adds up columns and rows of given table as shown in the following figure: </h3>
                    <div class="resumeOutputExple">
                        <p><strong>Input :</strong> <br>  
                        n (the size of row and column of the given table) <br> 1st row of the table <br> 2nd row of the table <br> : <br> : <br> n th row of the table <br> The input ends with a line consisting of a single 0.
                        </p>
                        <p><strong>Sample Intput :</strong> <br> 4 <br> 25 69 51 26 <br> 68 35 29 54 <br> 54 57 45 63 <br> 61 68 47 59 <br>0
                        <br>  </p>
                        <p><strong>Sample Output :</strong> <br> The table with sum of rows and columns:  </p>
                        <table>
                            <tr>
                                <td>25</td>
                                <td>69</td>
                                <td>51</td>
                                <td>26</td>
                                <td>171</td>
                            </tr>
                            <tr>
                                <td>68</td>
                                <td>35</td>
                                <td>29</td>
                                <td>54</td>
                                <td>186</td>
                            </tr>
                            <tr>
                                <td>54</td>
                                <td>57</td>
                                <td>45</td>
                                <td>63</td>
                                <td>219</td>
                            </tr>
                            <tr>
                                <td>61</td>
                                <td>68</td>
                                <td>47</td>
                                <td>59</td>
                                <td>235</td>
                            </tr>
                            <tr>
                                <td>208</td>
                                <td>229</td>
                                <td>172</td>
                                <td>202</td>
                                <td>811</td>
                            </tr>
                        </table>
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
                        <p>The website <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-76.php">solution</a> </p>
                        <p></p>
                    </div>
                </div>
            </section>
            <section class="exo77">
            <h2>Exercice 77</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program which reads a list of pairs of a word and a page number, and prints the word and a list of the corresponding page numbers.</h3>
                    <p>The number of pairs of a word and a page number is less than or equal to 1000. A word never appear in a page more than once. The words should be printed in alphabetical order and the page numbers should be printed in ascending order.</p>
                    <div class="resumeOutputExple">
                        
                        <p><strong>Sample Input : </strong> <br> apple 5 <br> banana 6 <br> 
                    </p>
                        <p><strong>Sample Output : </strong> <br> The word and a list of the corresponding page numbers: <br> apple <br> 5 <br> banana <br> 6</p>
                        
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
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-77.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo78">
            <h2>Exercice 78</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to create a function that returns true for all elements of an array, false otherwise. </h3>
                    
                    <div class="resumeOutputExple">
                        
                        <p><strong>Sample Output :</strong> <br> 1 <br> 0 <br> 0</p>
                        
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
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-78.php">solution</a></p>
                    
                    </div>
                </div>
            </section>
            <section class="exo79">
            <h2>Exercice 79</h2>
                <div class="resumeWrapper">
                    <h3> Write a PHP program to deep flatten an given array..</h3>
                    <div class="resumeOutputExple">
                        <p><strong>Sample Output : </strong> <br> 
                        ( <br> 
                            [0] => 1 <br> 
                            [1] => 2 <br> 
                            [2] => 3 <br> 
                            [3] => 4 <br> 
                            [4] => 5 <br> 
                            [5] => 6 <br> 
                        ) <br> 
                        </p>
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
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-79.php">solution</a></p>
                        <p></p>
                    </div>
                </div>
            </section>
            <section class="exo80">
            <h2>Exercice 80</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to create  a new array with n elements removed from the left.</h3>
                    <div class="resumeOutputExple">
                       <p>
                        Array <br>
                        ( <br>
                            [0] => 2 <br>
                            [1] => 3 <br>
                        ) <br>
                        Array <br>
                        ( <br>
                            [0] => 3 <br>
                            [1] => 4 <br>
                        ) <br>
                       </p>
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
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-80.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo81">
            <h2>Exercice 81</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to get the last element for which the given function returns a truth value.</h3>
                    <div class="resumeOutputExple">
                        
                        <p><strong>Sample Output</strong> <br> 3 <br> 4 </p>
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
                        <p>share the link to the <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-81.php">solution</a></p>
                    </div>
                </div>
            </section>
            <section class="exo82">
            <h2>Exercice 82</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to get the index of the last element for which the given function returns a truth value </h3>
                    
                    <div class="resumeOutputExple">
                        <p><strong>Sample Output :</strong> <br> 2 <br> 3</p>
                    
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
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-82.php">solution</a></p>
                        <p></p>
                    </div>
                </div>
            </section>
            <section class="exo83">
            <h2>Exercice 83</h2>
                <div class="resumeWrapper">
                    <h3> Write a PHP program to group the elements of an array based on the given function.</h3>
                    <div class="resumeOutputExple">
                        <p><strong> Sample Output :</strong>   <br> 
                        Array <br> 
                        ( <br> 
                            [3] => Array <br> 
                                ( <br> 
                                    [0] => one <br> 
                                    [1] => two <br> 
                                ) <br> 

                            [5] => Array <br> 
                                ( <br> 
                                    [0] => three <br> 
                                ) <br> 

                            [4] => Array <br> 
                                ( <br> 
                                    [0] => four <br> 
                                ) <br> 

                        ) <br> 
                        </p>
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
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-83.php">solution</a></p>
                        <p> </p>
                    </div>
                </div>
            </section>
            <section class="exo84">
            <h2>Exercice 84</h2>
                <div class="resumeWrapper">
                    <h3>Write a PHP program to check a flat list for duplicate values. Returns true if duplicate values exists and false if values are all unique.</h3>
                        <div class="resumeOutputExple">
                           
                           
                            <p><strong>Sample Output :</strong>  <br> 1  <br> 0</p>
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
                        <p>There's a link to the solution given by the website : <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-84.php">solution</a></p>
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