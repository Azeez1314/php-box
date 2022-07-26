<?php
   // echo date('d'); // Day
   // echo date('m'); // Month
   // echo date('Y'); // Year
   // echo date('l'); // Day of the week
   // echo date('Y/m/d');
   
   // echo date('h'); // Hour
   // echo date('i'); // minutes
   // echo date('s'); // seconds
   // echo date('a'); // AM or PM
   
   // echo date('h:i:sa');
   
   
   // // Set time zone
   date_default_timezone_set('Africa/Lagos');  

   /*
   	Unix timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
    */
   
   $timestamp = mktime(10, 14, 54, 9, 10, 1981);

   // echo $timestamp;
   
   // echo date('m/d/Y h:i:sa', $timestamp);
   
   $timestamp2 = strtotime('7:00pm March 22 2016');
   $timestamp3 = strtotime('tomorrow');
   $timestamp4 = strtotime('next Sunday');
   $timestamp5 = strtotime('+2 Days');


   // echo $timestamp2;
   
   echo date('m/d/Y h:i:sa', $timestamp5)
?>