<?php
namespace App\Services;

class FormService {
	public static function checkGender($contact) {
		if ($contact->gender === 0) { $gender = 'Male'; }
		if ($contact->gender === 1) { $gender = 'Female'; }

		return $gender;
	}

	public static function selectAge($contact) {
		if ($contact->age === 1) { $age = 'under 20'; }
		if ($contact->age === 2) { $age = '20 to 29'; }
		if ($contact->age === 3) { $age = '30 to 39'; }
		if ($contact->age === 4) { $age = '40 to 49'; }
		if ($contact->age === 5) { $age = '50 to 59'; }
		if ($contact->age === 6) { $age = '60 and over'; }

		return $age;
	}
}
