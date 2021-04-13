<?php

	function status($status){
		if($status ==1)
		{
			return "教学秘书：";
		}
		elseif($status == 2)
		{
			return "教师：";
		}
		elseif($status ==3)
		{
			return "学生：";
		}
	}
	
	function gender($gender){
		if($gender == 1){
			return"男";
		}
		else{
			return"女";
		}
	}