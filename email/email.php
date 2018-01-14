<?php
	$result = array();
	$result['error'] = 1;
	$result['url'] = 'https://docs.google.com/forms/u/1/d/1M0mmAEo6LtCoF8DOmCr5ww7F6366uc2-B2y_w8y0fk0';
	$result['text'] = 'new';

	if (isset($_REQUEST['email'])) {
		$find_email = $_REQUEST['email'];

		if (filter_var($find_email, FILTER_VALIDATE_EMAIL)) {
			$csv_new = array();
			$csv     = array_map( 'str_getcsv', file( 'email.csv' ) );
			foreach ( $csv as $c ) {
				$email_ar  = explode( ";", $c[0] );
				$csv_new[] = $email_ar;
				if ( $email_ar[0] == $find_email ) {
					$result['error']  = 0;
					$result['status'] = $email_ar[1];
				}
			}
			if ( $result['error'] == 1 ) {
				$result['error']  = 0;
				$result['status'] = 3;
				$csv_new[]        = array( $find_email, 3 );
			}

			$fp = fopen( 'email.csv', 'w' );

			foreach ( $csv_new as $key => $fields ) {
				fputcsv( $fp, $fields, ';' );
			}
			fclose( $fp );
			switch ( $result['status'] ) {
				case 0:
					$result['text'] = 'new';
					break;
				case 1:
					$result['text'] = 'your request is verifying';
					break;
				case 2:
					$result['text'] = 'to participate send eth to';
					break;
				case 3:
					$result['text'] = 'new';
					break;
				default:
					$result['text'] = 'new';
					break;
			}
		} else {
			$result['text'] = '<span style="color:#e64949;">Your email is incorrect.</span>';
		}
	}
	echo json_encode($result);
?>