<?php

    if($_POST['submit']){
        if($q1==''||$q2==''||$q3==''||$q4==''||$q5=='')
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = $_POST['q5'];

        if($q1==''||$q2==''||$q3==''||$q4==''||$q5=='') {
            echo '<h2>Please answer all questions.</h2>';
        }
        else{
            $score = 0;
            if($q1 == "Topeka"){ //correct option
                $score++;
            }
            if($q2 == "Jayhawks"){ //correct option
                $score++;
            }
            if($q3 == "Reid"){ //correct option
                $score++;
            }
            if($q4 == "93"){ //correct option
                $score++;
            }
            if($q5 == "Monroe"){ //correct option
                $score++;
            }

            echo '<h3>Question 1: What is the capital of Kansas?</h3>';
            echo '  <h4>You answered: '.$q1.'</h4>';
            echo '  <h4>Correct answer: Topeka</h4>';

            echo '<h3>Question 2: What is the KU mascot?</h3>';
            echo '  <h4>You answered: '.$q2.'</h4>';
            echo '  <h4>Correct answer: Jayhawks</h4>';

            echo '<h3>Question 3: Who is the coach of the Chiefs?</h3>';
            echo '  <h4>You answered: '.$q3.'</h4>';
            echo '  <h4>Correct answer: Andy Reid</h4>';

            echo '<h3>Question 4: How many mile away is the Sun from Earth?</h3>';
            echo '  <h4>You answered: '.$q4.'</h4>';
            echo '  <h4>Correct answer: 93 Million</h4>';

            echo '<h3>Question 5: Who was the 5th Presidnet of the United States?</h3>';
            echo '  <h4>You answered: '.$q5.'</h4>';
            echo '  <h4>Correct answer: James Monroe</h4>';

             
            echo '<h2> You answered '.$score.' correctly.</h2>';
            $score = ($score/5) * 100;
            echo '<h2> You scored '.$score.'%.</h2>';

            
        }
    }    
?>