<?php

	$result = array();
	$result['error'] = 0;

	if (isset($_REQUEST['link'])) {

		include( 'simple_html_dom.php' );

		$url  = 'https://etherscan.io/address/'.$_REQUEST['link'];
		$html = file_get_html( $url );

		if ( $html ) {
			$itogs = str_get_html( $html->find( '#ContentPlaceHolder1_divSummary', 0 ) );
		} else {
			$result['error'] = 1;
		}

		if ( $itogs ) {
			$table = str_get_html( $itogs->find( '.table', 0 ) );
		} else {
			$result['error'] = 1;
		}

		if ( $table ) {
			$tr = str_get_html( $table->find( 'tbody tr', 2 ) );
		} else {
			$result['error'] = 1;
		}

		if ( $tr ) {
			$td = str_get_html( $tr->find( 'td', 1 ) );
		} else {
			$result['error'] = 1;
		}

		if ( $td ) {
			$usdarr        = explode( " ", $td->innertext );
			$usd           = str_replace( '$', '', $usdarr[1] );
			$usd           = str_replace( ',', '', $usd );
			$usd           = str_replace( '.', ',', $usd );
			$result['usd'] = (float) $usd;
		}
	} else {
		$result['error'] = 1;
	}

	echo json_encode($result);

?>