<?php

namespace Maslosoft\Guides\Mangan\Models;

use Maslosoft\Mangan\Document;

class Plant extends Document
{

	/**
	 * @var string
	 */
	public $name = '';

	/**
	 * @EmbeddedArray(Leaf)
	 * @var Leaf[]
	 */
	public $leafs = [];

}
