<?php

namespace Minetro\Wordcha\Generator;

/**
 * Interface Generator
 *
 * @package Minetro\Wordcha\Generator
 */
interface Generator
{

	/**
	 * @return Security
	 */
	public function generate();

	/**
	 * @param $answer
	 *
	 * @return string
	 */
	public function hash($answer);

}