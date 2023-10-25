<?php
require_once '../login/connection.php';
if(isset($_SESSION['Admin'])){
	echo "<script>window.location='".base_url('layout/wrapperadmin/wrapper.php')."';</script>";
} elseif(isset($_SESSION['Konselor'])){
	echo"<script>window.location='".base_url('layout/wrapperkonselor/wrapper.php')."';</script>";
} elseif(isset($_SESSION['User'])){
	echo"<script>window.location='".base_url('layout/wrapperuser/wrapper.php')."';</script>";
} else {
	echo "<script>window.location='".base_url('login/index.php')."';</script>";
}

?>