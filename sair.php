﻿<?php 
	session_start(); 
	session_destroy(); 
	header("Location: http://localhost/portal_av"); 
	exit;
?>