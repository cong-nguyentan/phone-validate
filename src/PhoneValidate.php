<?php

namespace congnguyentan\PhoneValidate;

class PhoneValidate{
    /**
	 * Phone validate
	 *
	 * @param string $attribute
	 * @param mixed $value
	 * @return bool
	 */
	public function validatePhone( $attribute, $value, $parameters, $validator ) {
		return (bool) preg_match( "/^\+[0-9]{10,}$/", $value );
	}
}