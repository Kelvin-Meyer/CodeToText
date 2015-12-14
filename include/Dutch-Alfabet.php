<?php
function getDutchString($word)
{
    $splittedChars = str_split($word);
    $result = array();
    $letter = "";
    for ($i = 0; $i < sizeof($splittedChars); $i++) {
        switch ($splittedChars[$i]) {
            case "a":
                $letter = "Anton";
                break;
            case "b":
                $letter = "Bernard";
                break;
            case "c":
                $letter = "Cornelis";
                break;
            case "d":
                $letter = "Dirk";
                break;
            case "e":
                $letter = "Eduard";
                break;
            case "f":
                $letter = "Ferdinand";
                break;
            case "g":
                $letter = "Gerard";
                break;
            case "h":
                $letter = "Hendrik";
                break;
            case "i":
                $letter = "Isaak";
                break;
            case "j":
                $letter = "Jan";
                break;
            case "k":
                $letter = "Karel";
                break;
            case "l":
                $letter = "Lodewijk";
                break;
            case "m":
                $letter = "Maria";
                break;
            case "n":
                $letter = "Nico";
                break;
            case "o":
                $letter = "Otto";
                break;
            case "p":
                $letter = "Pieter";
                break;
            case "q":
                $letter = "Quotient";
                break;
            case "r":
                $letter = "Rudolf";
                break;
            case "s":
                $letter = "Simon";
                break;
            case "t":
                $letter = "Teunis";
                break;
            case "u":
                $letter = "Utrecht";
                break;
            case "v":
                $letter = "Victor";
                break;
            case "w":
                $letter = "Willem";
                break;
            case "x":
                $letter = "Xantippe";
                break;
            case "y":
                $letter = "Ypsilon";
                break;
            case "z":
                $letter = "Zaandam";
                break;
            case "1":
                $letter = "Een";
                break;
            case "2":
                $letter = "Twee";
                break;
            case "3":
                $letter = "Drie";
                break;
            case "4":
                $letter = "Vier";
                break;
            case "5":
                $letter = "Vijf";
                break;
            case "6":
                $letter = "Zes";
                break;
            case "7":
                $letter = "Zeven";
                break;
            case "8":
                $letter = "Acht";
                break;
            case "9":
                $letter = "Negen";
                break;
            case "0":
                $letter = "Nul";
                break;
            case " ":
                $letter = " ";
                break;
            case "-":
                $letter = "-";
                break;
            default:
                $letter = " ? ";
        }
        array_push($result, $letter);
    }
    return $result;
}
