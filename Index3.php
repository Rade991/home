<html>
<body>

    <!-- 1. -->

    <ul>
        <?php
        lista("blue", 18, "Ovo je plavi list item.");
        lista("red", 24, "Ovo je crveni list item.");
        lista("green", 30, "Ovo je zeleni list item.");
        ?>
    </ul>
    
    <!-- 2. -->

    <table border='1' width='500px' height='100px' cellpadding= '10'>

        <tr>
            <?php
            celija("it", "Neki tekst.");
            celija("", "Neki tekst.");
            celija("it", "Neki tekst.");
            ?>
        </tr>

        <tr>
            <?php
            celija("", "Neki tekst.");
            celija("it", "Neki tekst.");
            celija("", "Neki tekst.");
            ?>
        </tr>

    </table>

<?php

    /* 1. */
    
    function lista($color, $font, $text)
    {
    echo "<li style='font-size:$font; color: $color;'>$text</li>";
    } 

    /* 2. */

    function celija($it, $tekst)
    {   
        if($it=="it")
        {
            echo "<td><i>$tekst</i></td>";
        }

        else
        {
            echo "<td>$tekst</td>";
        }
    }

?>
</body>
</html>