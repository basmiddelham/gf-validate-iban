
/**
 * GF: Iban validation
 */
add_filter( 'gform_field_validation', function( $result, $value, $form, $field ) {
	if ( $field->cssClass === 'verify-iban' ) { // phpcs:ignore
		if ( ! preg_match( '/[a-zA-Z]{2}[0-9]{2}[a-zA-Z0-9]{4}[0-9]{7}([a-zA-Z0-9]?){0,16}/', $value ) ) {
			$result['is_valid'] = false;
			$result['message']  = 'Invalid IBAN';
		}
	}
	return $result;
}, 10, 4 );
