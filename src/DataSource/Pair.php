<?php declare(strict_types = 1);

namespace Contributte\Wordcha\DataSource;

class Pair
{

	/** @var string */
	private $question;

	/** @var string */
	private $answer;

	public function __construct(string $question, string $answer)
	{
		$this->question = $question;
		$this->answer = $answer;
	}

	public function getQuestion(): string
	{
		return $this->question;
	}

	public function getAnswer(): string
	{
		return $this->answer;
	}

}
