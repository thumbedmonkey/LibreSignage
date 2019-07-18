<?php

namespace api\endpoint\slide;

use \classes\APITestCase;

class slide_list extends APITestCase {
	use \traits\TestEndpointNotAuthorizedWithoutLogin;

	public function setUp(): void {
		parent::setUp();

		$this->set_endpoint_method('GET');
		$this->set_endpoint_uri('slide/slide_list.php');
	}

	public function test_is_response_schema_correct() {
		$this->call_api_and_check_response_schema(
			[],
			[],
			dirname(__FILE__).'/schemas/slide_list.schema.json',
			'admin',
			'admin'
		);
	}
}