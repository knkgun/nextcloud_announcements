<?php
/**
 * @copyright Copyright (c) 2016, Joas Schilling <coding@schilljs.com>
 *
 * @author Joas Schilling <coding@schilljs.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

script('nextcloud_announcements', 'admin');

/** @var array $_ */
/** @var \OCP\IL10N $l */
?>
<div id="nextcloudannouncements" class="section">
	<h2 class="inlineblock"><?php p($l->t('Nextcloud announcements')); ?></h2>

	<p>
		<input type="hidden" name="notification_groups" class="notification_groups" value="<?php p($_['groups']) ?>" style="width: 320px;" />
		<br />
		<em><?php p($l->t('These groups will be notified about the announcements.')); ?></em>
	</p>
</div>
