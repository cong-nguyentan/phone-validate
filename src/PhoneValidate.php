<?php

namespace congnguyentan\phone-validate;

class phone-validate{
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