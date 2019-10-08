<?php

namespace Yoast\WP\Free\Tests\Presentations\Indexable_Presentation;

use Yoast\WP\Free\Tests\TestCase;

/**
 * Class OG_Article_Author_Test
 *
 * @coversDefaultClass \Yoast\WP\Free\Presentations\Indexable_Presentation
 *
 * @group presentations
 */
class OG_Article_Author_Test extends TestCase {
	use Presentation_Instance_Builder;

	/**
	 * Sets up the test class.
	 */
	public function setUp() {
		parent::setUp();

		$this->setInstance();
	}

	/**
	 * Tests whether an empty string is returned.
	 *
	 * ::covers generate_og_article_author
	 */
	public function test_generate_og_article_author_and_return_empty() {
		$this->assertEmpty( $this->instance->generate_og_article_author() );
	}
}