<?php include_once("playscript.php") ?>

<?php include ("header.php") ?>
<link rel="stylesheet" href="play.css" />

<form method="post">
  <div id="container">

    <div id="tscore">
        <table id="score">
          <tr>
            <td>$<?php echo $_SESSION["Score"]?></td>
          </tr>
          <tr>
            <td class="jp-name"><?php echo $_SESSION["user"]?></td>
          </tr>
          <tr>
            <td><button name="reset" value="Restart">Restart</button></td>
          </tr>
        </table>
    </div>

    <div id="tboard">
      <table id="board">
        <tr id="categories">
          <td id="categories1"><?php echo $_SESSION["cat1"] ?></td>
          <td id="categories2"><?php echo $_SESSION["cat2"] ?></td>
          <td id="categories3"><?php echo $_SESSION["cat3"] ?></td>
          <td id="categories4"><?php echo $_SESSION["cat4"] ?></td>
          <td id="categories5"><?php echo $_SESSION["cat5"] ?></td>
          <td id="categories6"><?php echo $_SESSION["cat6"] ?></td>
        </tr>
        <tr id="row1">
          <td id="row1_1"><button name="point101" class="<?php echo $_SESSION['visible1'] ?>">$200</button></td>
          <td id="row1_2"><button name="point102" class="<?php echo $_SESSION['visible2'] ?>">$200</button></td>
          <td id="row1_3"><button name="point103" class="<?php echo $_SESSION['visible3'] ?>">$200</button></td>
          <td id="row1_4"><button name="point104" class="<?php echo $_SESSION['visible4'] ?>">$200</button></td>
          <td id="row1_5"><button name="point105" class="<?php echo $_SESSION['visible5'] ?>">$200</button></td>
          <td id="row1_5"><button name="point106" class="<?php echo $_SESSION['visible6'] ?>">$200</button></td>
        </tr>
        <tr id="row2">
          <td id="row2_1"><button name="point201" class="<?php echo $_SESSION['visible7'] ?>">$400</button></td>
          <td id="row2_2"><button name="point202" class="<?php echo $_SESSION['visible8'] ?>">$400</button></td>
          <td id="row2_3"><button name="point203" class="<?php echo $_SESSION['visible9'] ?>">$400</button></td>
          <td id="row2_4"><button name="point204" class="<?php echo $_SESSION['visible10'] ?>">$400</button></td>
          <td id="row2_5"><button name="point205" class="<?php echo $_SESSION['visible11'] ?>">$400</button></td>
          <td id="row2_5"><button name="point206" class="<?php echo $_SESSION['visible12'] ?>">$400</button></td>
        </tr>
        <tr id="row3">
          <td id="row3_1"><button name="point301" class="<?php echo $_SESSION['visible13'] ?>">$600</button></td>
          <td id="row3_2"><button name="point302" class="<?php echo $_SESSION['visible14'] ?>">$600</button></td>
          <td id="row3_3"><button name="point303" class="<?php echo $_SESSION['visible15'] ?>">$600</button></td>
          <td id="row3_4"><button name="point304" class="<?php echo $_SESSION['visible16'] ?>">$600</button></td>
          <td id="row3_5"><button name="point305" class="<?php echo $_SESSION['visible17'] ?>">$600</button></td>
          <td id="row3_5"><button name="point306" class="<?php echo $_SESSION['visible18'] ?>">$600</button></td>
        </tr>
        <tr id="row4">
          <td id="row4_1"><button name="point401" class="<?php echo $_SESSION['visible19'] ?>">$800</button></td>
          <td id="row4_2"><button name="point402" class="<?php echo $_SESSION['visible20'] ?>">$800</button></td>
          <td id="row4_3"><button name="point403" class="<?php echo $_SESSION['visible21'] ?>">$800</button></td>
          <td id="row4_4"><button name="point404" class="<?php echo $_SESSION['visible22'] ?>">$800</button></td>
          <td id="row4_5"><button name="point405" class="<?php echo $_SESSION['visible23'] ?>">$800</button></td>
          <td id="row4_5"><button name="point406" class="<?php echo $_SESSION['visible24'] ?>">$800</button></td>
        </tr>
        <tr id="row5">
          <td id="row5_1"><button name="point501" class="<?php echo $_SESSION['visible25'] ?>">$1000</button></td>
          <td id="row5_2"><button name="point502" class="<?php echo $_SESSION['visible26'] ?>">$1000</button></td>
          <td id="row5_3"><button name="point503" class="<?php echo $_SESSION['visible27'] ?>">$1000</button></td>
          <td id="row5_4"><button name="point504" class="<?php echo $_SESSION['visible28'] ?>">$1000</button></td>
          <td id="row5_5"><button name="point505" class="<?php echo $_SESSION['visible29'] ?>">$1000</button></td>
          <td id="row5_5"><button name="point506" class="<?php echo $_SESSION['visible30'] ?>">$1000</button></td>
        </tr>
      </table>
    </div>

  </div>
</form>
</body>
</html>