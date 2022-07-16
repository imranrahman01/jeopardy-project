<?php
session_start();


  $questionsCol1 = array(
      "Norway spruces are a prominent feature of this area that covers 2,300 square miles of southwest Germany",
      "Washington's Whidbey Island forms part of the northern boundary of this inlet",
      "This largest Caribbean island is known as 'The Pearl of the Antilles'", 
      "Venice & Trieste are important ports on this sea, an arm of the Mediterranean", 
      "Afrikaner Gert Alberts was the leader of a famous crossing of this desert in the 1870s");
  $answersCol1 = array(
      "The Black Forest",
      "The Puget Sound", 
      "Cuba", 
      "The Adriatic", 
      "The Kalahari Desert",);

  $questionsCol2 = array(
      "Amateur magician Tony Curtis did his own tricks in a 1953 biopic of this conjurer & escape artist", 
      "At age 78, Ian McKellen said this character 'is over 7,000 years old, so I'm not too old'", 
      "In 'Harry Potter & the Chamber of Secrets', Professor Snape uses this spell to disarm Professor Lockhart", 
      "Magician Nicolas Cage hires an assistant in this 2010 Disney film with the same title as a segment of 'Fantasia'", 
      "Sandra Bullock & Nicole Kidman were witch sisters in this 1998 movie",);
  $answersCol2 = array(
      "Houdini", 
      "Gandalf", 
      "Expelliarmus", 
      "The Sorcerer's Apprentice",  
      "Practical Magic");

  $questionsCol3 = array(
    "XOM: This energy company",
    "MRNA: They take a variant approach", 
    "BABA: It's big in China", 
    "GME: Power to the players", 
    "GOOG: Actually this 8-letter name now",);
  $answersCol3 = array(
    "ExxonMobil", 
    "Moderna", 
    "Alibaba", 
    "GameStop", 
    "Alphabet",);

  $questionsCol4 = array(
    "Divide an object's speed by the speed of sound to get this number; passenger jets often cruise at about .8", 
    "For milk in the U.S., this process requires 161 degrees for at least 15 seconds; buh bye, bacteria!", 
    "Per Richard Feynman, if velocities of rebound are almost equal to initial velocities, 'such a collision is' this rubbery adjective", 
    "In 1672, Cassini discovered Rhea, the second-largest moon of this planet, now discover Rhea for yourself via the Cassini spacecraft", 
    "About 66 million years ago, an asteroid hit Earth with a yield of 100 trillion tons of TNT, ending this 'middle life' era", );
  $answersCol4 = array(
    "Mach",
    "pasteurization", 
    "elastic", 
    "Saturn", 
    "The Mesozoic",);

  $questionsCol5 = array(
    "Wyoming: This woman starting in 2017, taking the seat her dad had won nearly 40 years before", 
    "Mississippi: Bennie Thompson, who chairs the Select Committee investigating the events of this date in 2021", 
    "California: This late singer of 'I Got You Babe' whose name is on the 1998 copyright extension act", 
    "Ohio: This man, a Republican Speaker of the House from 2011 to 2015 & later, an advocate for marijuana legalization", 
    "This state: Don Young, who passed away in 2022 after serving nearly 50 years in the House", );
  $answersCol5 = array(
    "Liz Cheney",
    "January 6th", 
    "Sonny Bono", 
    "John Boehner", 
    "Alaska",);

  $questionsCol6 = array(
    "This vote of 'no' is a homophone for an animal sound; what say ye?", 
    "What has happened to an appeal that won't be heard, or to a class that has been allowed to leave a school room", 
    "A bill that passes the U.S. Senate with at least 67 votes is said to be this type of denial-proof", 
    "Adjective for an absolute denial; it could also refer to the way clues are divided up on a 'Jeopardy!' board", 
    "Change one letter in 'refuse' to get this, meaning to prove a statement or theory to be wrong", );
  $answersCol6 = array(
    "Nay", 
    "dismissed", 
    "veto", 
    "categorical", 
    "refute",);

  $pf = file_get_contents("user_points.txt");
  preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $pf, $poi);

  $_SESSION["Score"] = $poi[3];
  $_SESSION["correct"] = "u-hidden";
  $_SESSION["incorrect"] = "u-hidden";

  $tf = file_get_contents("user_tiles.txt");
  preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);

  $tiles = str_split($toi[3]);

  for ($x = 1; $x < count($tiles) + 1; $x++) {
    if ($tiles[$x - 1] == 1) {
      $_SESSION["visible" . $x] = "u-hidden";
    }
    if ($tiles[$x - 1] == 0) {
      $_SESSION["visible" . $x] = "u-visible";
    }
  }


  $_SESSION["cat1"] = "GEOGRAPHY";
  $_SESSION["cat2"] = "MOVIE MAGIC & WIZARDRY";
  $_SESSION["cat3"] = "STOCK SYMBOLS";
  $_SESSION["cat4"] = "EXAMINE THE SCIENCE";
  $_SESSION["cat5"] = "THE REPRESENTATIVE FROM...";
  $_SESSION["cat6"] = "THE STATE OF DENIAL";
  
    if(isset($_POST['point101'])){

      $_SESSION["Question"] = $questionsCol1[0];
      $_SESSION["Answer"] = $answersCol1[0];
      $_SESSION["visible1"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 0, 1);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 200;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point102'])){

      $_SESSION["Question"] = $questionsCol2[0];
      $_SESSION["Answer"] = $answersCol2[0];
      $_SESSION["visible2"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 1, 2);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 200;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point103'])){

      $_SESSION["Question"] = $questionsCol3[0];
      $_SESSION["Answer"] = $answersCol3[0];
      $_SESSION["visible3"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 2, 3);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 200;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point104'])){

      $_SESSION["Question"] = $questionsCol4[0];
      $_SESSION["Answer"] = $answersCol4[0];
      $_SESSION["visible4"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 3, 4);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 200;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point105'])){

      $_SESSION["Question"] = $questionsCol5[0];
      $_SESSION["Answer"] = $answersCol5[0];
      $_SESSION["visible5"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 4, 5);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 200;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point106'])){

      $_SESSION["Question"] = $questionsCol6[0];
      $_SESSION["Answer"] = $answersCol6[0];
      $_SESSION["visible6"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 5, 6);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 200;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point201'])){

      $_SESSION["Question"] = $questionsCol1[1];
      $_SESSION["Answer"] = $answersCol1[1];
      $_SESSION["visible7"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 6, 7);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 400;
      header("Location: questionPage.php");
    }elseif(isset($_POST['point202'])){

      $_SESSION["Question"] = $questionsCol2[1];
      $_SESSION["Answer"] = $answersCol2[1];
      $_SESSION["visible8"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 7, 8);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 400; 
      header("Location: questionPage.php");
    }elseif(isset($_POST['point203'])){

      $_SESSION["Question"] = $questionsCol3[1];
      $_SESSION["Answer"] = $answersCol3[1];
      $_SESSION["visible9"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 8, 9);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 400;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point204'])){

      $_SESSION["Question"] = $questionsCol4[1];
      $_SESSION["Answer"] = $answersCol4[1];
      $_SESSION["visible10"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 9, 10);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 400;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point205'])){

      $_SESSION["Question"] = $questionsCol5[1];
      $_SESSION["Answer"] = $answersCol5[1];
      $_SESSION["visible11"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 10, 11);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 400;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point206'])){

      $_SESSION["Question"] = $questionsCol6[1];
      $_SESSION["Answer"] = $answersCol6[1];
      $_SESSION["visible12"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 11, 12);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 400;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point301'])){

      $_SESSION["Question"] = $questionsCol1[2];
      $_SESSION["Answer"] = $answersCol1[2];
      $_SESSION["visible13"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 12, 13);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 600;   
      header("Location: questionPage.php");
    }elseif(isset($_POST['point302'])){

      $_SESSION["Question"] = $questionsCol2[2];
      $_SESSION["Answer"] = $answersCol2[2];
      $_SESSION["visible14"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 13, 14);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 600; 
      header("Location: questionPage.php");
    }elseif(isset($_POST['point303'])){

      $_SESSION["Question"] = $questionsCol3[2];
      $_SESSION["Answer"] = $answersCol3[2];
      $_SESSION["visible15"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 14, 15);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 600;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point304'])){

      $_SESSION["Question"] = $questionsCol4[2];
      $_SESSION["Answer"] = $answersCol4[2];
      $_SESSION["visible16"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 15, 16);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 600;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point305'])){

      $_SESSION["Question"] = $questionsCol5[2];
      $_SESSION["Answer"] = $answersCol5[2];
      $_SESSION["visible17"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 16, 17);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 600;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point306'])){

      $_SESSION["Question"] = $questionsCol6[2];
      $_SESSION["Answer"] = $answersCol6[2];
      $_SESSION["visible18"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 17, 18);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 600;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point401'])){

      $_SESSION["Question"] = $questionsCol1[3];
      $_SESSION["Answer"] = $answersCol1[3];
      $_SESSION["visible19"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 18, 19);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 800;   
      header("Location: questionPage.php");
    }elseif(isset($_POST['point402'])){

      $_SESSION["Question"] = $questionsCol2[3];
      $_SESSION["Answer"] = $answersCol2[3];
      $_SESSION["visible20"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 19, 20);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 800; 
      header("Location: questionPage.php");
    }elseif(isset($_POST['point403'])){

      $_SESSION["Question"] = $questionsCol3[3];
      $_SESSION["Answer"] = $answersCol3[3];
      $_SESSION["visible21"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 20, 21);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 800;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point404'])){

      $_SESSION["Question"] = $questionsCol4[3];
      $_SESSION["Answer"] = $answersCol4[3];
      $_SESSION["visible22"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 21, 22);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 800;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point405'])){

      $_SESSION["Question"] = $questionsCol5[3];
      $_SESSION["Answer"] = $answersCol5[3];
      $_SESSION["visible23"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 22, 23);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 800;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point406'])){

      $_SESSION["Question"] = $questionsCol6[3];
      $_SESSION["Answer"] = $answersCol6[3];
      $_SESSION["visible24"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 23, 24);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 800;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point501'])){

      $_SESSION["Question"] = $questionsCol1[4];
      $_SESSION["Answer"] = $answersCol1[4];
      $_SESSION["visible25"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 24, 25);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 1000;   
      header("Location: questionPage.php");
    }elseif(isset($_POST['point502'])){

      $_SESSION["Question"] = $questionsCol2[4];
      $_SESSION["Answer"] = $answersCol2[4];
      $_SESSION["visible26"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 25, 26);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 1000; 
      header("Location: questionPage.php");
    }elseif(isset($_POST['point503'])){

      $_SESSION["Question"] = $questionsCol3[4];
      $_SESSION["Answer"] = $answersCol3[4];
      $_SESSION["visible27"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 26, 27);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 1000;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point504'])){

      $_SESSION["Question"] = $questionsCol4[4];
      $_SESSION["Answer"] = $answersCol4[4];
      $_SESSION["visible28"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 27, 28);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 1000;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point505'])){

      $_SESSION["Question"] = $questionsCol5[4];
      $_SESSION["Answer"] = $answersCol5[4];
      $_SESSION["visible29"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 28, 29);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 1000;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point506'])){

      $_SESSION["Question"] = $questionsCol6[4];
      $_SESSION["Answer"] = $answersCol6[4];
      $_SESSION["visible30"] = "u-hidden";
      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $buffer_tile_data = $toi[3];
      $new_tile_data = $toi[1] . $toi[2] . substr_replace($buffer_tile_data, "1", 29, 30);
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      $_SESSION["answerv1"] = "u-hidden";
      $_SESSION["Points"] = 1000;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['reset'])){
      $_SESSION["Score"]=0;
      $file = file_get_contents("user_points.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $file, $match);
      $newScore = $_SESSION["user"]."=".$_SESSION["Score"];
      $file = str_replace($match[0], $newScore, $file);
      file_put_contents("user_points.txt", $file);

      $tf = file_get_contents("user_tiles.txt");
      preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $tf, $toi);
      $new_tile_data = $toi[1] . $toi[2] . "000000000000000000000000000000";
      $tf = str_replace($toi[0], $new_tile_data, $tf);
      file_put_contents("user_tiles.txt", $tf);
      header("Refresh:0");
    }


    ?>