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

namespace XG\Classes\Domain\Model;

class Bot extends Base
{
	/** @var int */
	public $BotState;
	/** @var int */
	public $InfoQueueCurrent;
	/** @var int */
	public $InfoQueueTotal;
	/** @var int */
	public $InfoSlotCurrent;
	/** @var int */
	public $InfoSlotTotal;
	/** @var float */
	public $InfoSpeedCurrent;
	/** @var float */
	public $InfoSpeedMax;
	/** @var int */
	public $LastContact;
	/** @var string */
	public $LastMessage;

	/** @var int */
	public $PacketCount;
}