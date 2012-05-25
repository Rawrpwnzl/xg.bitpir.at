<?php
//
// Copyright (C) 2012 Lars Formella <ich@larsformella.de>
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//

class XG_Classes_View
{
	/** @var mixed[] */
	private $variables = array();

	/**
	 * @param string $key
	 * @param mixed $value
	 */
	public function assign ($key, $value)
	{
		$this->variables[$key] = $value;
	}

	/**
	 * @param string $template
	 * @param string $controller
	 * @return string
	 */
	public function loadTemplate ($template, $controller = '')
	{
		$file = dirname(__FILE__) . '/../Templates/' . ($controller != '' ? '/' . $controller : '') . '/' . $template . '.php';

		if (file_exists($file))
		{
			ob_start();

			foreach ($this->variables as $key => $value)
			{
				$$key = $value;
			}
			include $file;
			$output = ob_get_contents();

			ob_end_clean();

			return $output;
		}
		else
		{
			return 'could not find template ' . $template . ' for controller ' . $controller;
		}
	}
}