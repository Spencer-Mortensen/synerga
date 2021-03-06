<?php

/**
 * Copyright (C) 2017 Spencer Mortensen
 *
 * This file is part of Synerga.
 *
 * Synerga is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Synerga is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with Synerga. If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Spencer Mortensen <smortensen@datto.com>
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL-3.0
 * @copyright 2017 Spencer Mortensen
 */

namespace Synerga;

class Page
{
	private $title;
	private $head;
	private $body;

	public function __construct()
	{
		$this->title = '';
		$this->head = [];
		$this->body = '';
	}

	public function setTitle(string $title)
	{
		$this->title = $title;
	}

	public function getTitle(): string
	{
		return $this->title;
	}

	public function setHead(array $head)
	{
		$this->head = $head;
	}

	public function getHead(): array
	{
		return array_values($this->head);
	}

	public function addHead(array $head)
	{
		$this->head = array_merge($this->head, array_combine($head, $head));
	}

	public function addHeadElement(string $html)
	{
		$this->head[$html] = $html;
	}

	public function setBody(string $body)
	{
		$this->body = $body;
	}

	public function getBody(): string
	{
		return $this->body;
	}
}
