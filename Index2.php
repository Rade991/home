<?php

/* 1. */

$color = "blue";

switch ($color) {
    case "red":
        echo "<p style='color:red;'>This paragraph is red.</p>";
        break;
    case "green":
        echo "<p style='color:green;'>This paragraph is green.</p>";
		break;
	case "blue":
        echo "<p style='color:blue;'>This paragraph is blue.</p>";
        break;
    default:
        echo "<p style='color:yellow;'>This paragraph is yellow.</p>";
        break;
}

?>
