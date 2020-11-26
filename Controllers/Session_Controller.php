<?php
    class Session{
        static function checkUser(){
           if( $_SESSION["type"] = "HS")
           {
               return true;
           }
           return false;
        }
        // static function checkAdmin(){
        //     if(isset($_SESSION['user']))
        //     {
        //         return true;
        //     }
        //     return false;
        // }
        static function checkAuth(){
            
            if(isset($_SESSION['user']))
            {
                return "1";
            }
            return "0";
            
        }
    }
?>