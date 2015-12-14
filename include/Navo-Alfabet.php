<?php
function getNavoString($word)
{
    $splittedChars = str_split($word);
    $result = array();
    for ($i = 0; $i < sizeof($splittedChars); $i++) {
        switch ($splittedChars[$i]) {
            case "a":
                $letter = "Alpha";
                break;
            case "b":
                $letter = "Bravo";
                break;
            case "c":
                $letter = "Charlie";
                break;
            case "d":
                $letter = "Delta";
                break;
            case "e":
                $letter = "Echo";
                break;
            case "f":
                $letter = "Foxtrot";
                break;
            case "g":
                $letter = "Golf";
                break;
            case "h":
                $letter = "Hotel";
                break;
            case "i":
                $letter = "India";
                break;
            case "j":
                $letter = "Juliet";
                break;
            case "k":
                $letter = "Kilo";
                break;
            case "l":
                $letter = "Lima";
                break;
            case "m":
                $letter = "Mike";
                break;
            case "n":
                $letter = "November";
                break;
            case "o":
                $letter = "Oscar";
                break;
            case "p":
                $letter = "Papa";
                break;
            case "q":
                $letter = "Quebec";
                break;
            case "r":
                $letter = "Romeo";
                break;
            case "s":
                $letter = "Sierra";
                break;
            case "t":
                $letter = "Tango";
                break;
            case "u":
                $letter = "Uniform";
                break;
            case "v":
                $letter = "Victor";
                break;
            case "w":
                $letter = "Whiskey";
                break;
            case "x":
                $letter = "X-ray";
                break;
            case "y":
                $letter = "Yankee";
                break;
            case "z":
                $letter = "Zulu";
                break;
            case "1":
                $letter = "One";
                break;
            case "2":
                $letter = "Two";
                break;
            case "3":
                $letter = "Three";
                break;
            case "4":
                $letter = "Four";
                break;
            case "5":
                $letter = "Five";
                break;
            case "6":
                $letter = "Six";
                break;
            case "7":
                $letter = "Seven";
                break;
            case "8":
                $letter = "Eight";
                break;
            case "9":
                $letter = "Nine";
                break;
            case "0":
                $letter = "Zero";
                break;
            case " ":
                $letter = " ";
                break;
            case "-":
                $letter = "-";
                break;
            default:
                $letter = " ? ";
                break;
        }
        array_push($result, $letter);
    }
    return $result;
}