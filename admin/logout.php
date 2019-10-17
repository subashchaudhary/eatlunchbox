<!--

/***************************************************************************************/
*    Title: eatlunchbox                                                                * 
*    Author: Subash Tharu                                                              *
*    Email: subashtharu11@gmail.com                                                    *
*    Date: 2019                                                                        *
*    Code version: 1.0                                                                 *
*    Availability: http://www.github.com/subashchaudhary                               *
*                                                                                      *
/***************************************************************************************/
(Version 1.0) [Source code]. http://www.github.com/subashchaudhary

 -->

<?php 
	session_start();
	session_unset();
	session_destroy();
	header("location:admin-login.php");

?>