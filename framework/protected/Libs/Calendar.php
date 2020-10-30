<?php

class Calendar {

	public static function getWeek($date = null) {
		if ($date == null) {
			$date = date('Y-m-d');
		}

		if (date('w', strtotime($date)) == 0) {
			$startOfWeek = date('Y-m-d', strtotime($date));
		} else {
			$startOfWeek = date('Y-m-d', strtotime('last Sunday', strtotime($date)));
		}
		

		$week = array();
		$i = 0;
		while ($i < 7) {
			$week[$i] = date('Y-m-d', strtotime($startOfWeek . " + {$i} days"));
			$i++;
		}
		return $week;
		
	}

	public static function getNextDays($numDays = null, $date = null) {
		if ($date == null) {
			$date = date('Y-m-d');
		}

		if ($numDays == null) {
			$numDays = 7;
		} 

		$week = array();
		$i = 0;
		while ($i < $numDays) {
			$week[$i] = date('Y-m-d', strtotime($date . " + {$i} days"));
			$i++;
		}
		return $week;
	}
}