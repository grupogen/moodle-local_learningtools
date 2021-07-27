<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    lttool_note
 * @copyright  2015 onwards LMSACE Dev Team (http://www.lmsace.com)
 * @authors    LMSACE Dev Team
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * lttool_note uninstall function.
 *
 * @return void
 */

function xmldb_ltool_note_uninstall() {
    global $DB;

    $plugin = 'note';
    $strpluginname = get_string('pluginname', 'ltool' . $plugin);
    if ($DB->record_exists('learningtools_products', array('shortname' => $plugin)) ) {
        $DB->delete_records('learningtools_products', array('shortname' => $plugin));
    }
}