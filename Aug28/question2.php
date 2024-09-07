<?php
    $day = readline("Input day: ");
    $month = readline("Input month: ");
    $year = readline("Input year: ");

    if( ($year > 0) && ($day > 0 && $day <= 31) && ($month >= 1 && $month<=12)){
        switch($month){
            case 1:
                if($day > 0 && $day<=31){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 2:
                if($year%4==0){
                    if($day > 0 && $day <=29){
                        echo "Valid date";
                    }
                    else{
                        echo "Invalid date";
                    }
                }
                else{
                    if($day > 0 && $day <=28){
                        echo "Valid date";
                    }
                    else{
                        echo "Invalid date";
                    }
                }
                break;
            case 3:
                if($day > 0 && $day<=31){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 4:
                if($day > 0 && $day<=30){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 5:
                if($day > 0 && $day<=31){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 6:
                if($day > 0 && $day<=30){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 7:
                if($day > 0 && $day<=31){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 8:
                if($day > 0 && $day<=31){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 9:
                if($day > 0 && $day<=30){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 10:
                if($day > 0 && $day<=31){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 11:
                if($day > 0 && $day<=30){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 12:
                if($day > 0 && $day<=31){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            default:
                echo "Enter a valid month";
                break;
        }
    }
    else{
        echo "Invalid format";
    }
?>