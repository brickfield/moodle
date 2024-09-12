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

namespace tool_brickfield\external;

use core\task\manager as taskmanager;
use core_external\external_function_parameters;
use core_external\external_single_structure;
use core_external\external_value;
use tool_brickfield\registration;
use tool_brickfield\manager;

/**
 * Service to check the status of the toolkit registrtion.
 *
 * @package    tool_brickfield
 * @copyright  2024 onward Brickfield Education Labs Ltd, https://www.brickfield.ie
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class check_toolkit_validation extends \core_external\external_api {

    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function execute_parameters() {
        return new external_function_parameters([]);
    }

    /**
     * Check results of the adhoc task to check validation.
     *
     * @return bool
     */
    public static function execute() {
        $tasks = taskmanager::get_adhoc_tasks('\tool_brickfield\task\validate_registration', false, true);
        if (empty($tasks)) {
            $status = get_config('tool_brickfield', registration::STATUS);
            if ($status == registration::NOT_ENTERED || $status == registration::EXPIRED || $status == registration::INVALID) {
                $message = get_string('inactive', manager::PLUGINNAME);
                $level = 'error';
            } else if ($status == registration::PENDING) {
                $message = get_string('notvalidated', manager::PLUGINNAME);
                $level = 'warning';
            } else if ($status == registration::VALIDATED) {
                $message = get_string('activated', manager::PLUGINNAME);
                $level = 'success';
            } else if ($status == registration::ERROR) {
                $message = get_string('validationerror', manager::PLUGINNAME);
                $level = 'error';
            }
            return ['status' => $status, 'message' => $message, 'level' => $level];
        } else {
            return ['status' => -1]; // Indicate task is still in progress.
        }
    }

    /**
     * Returns description of method result value
     * @return external_description
     */
    public static function execute_returns() {
        return new external_single_structure([
            'status' => new external_value(PARAM_INT, 'Registration validation status'),
            'message' => new external_value(PARAM_TEXT, 'Status message', VALUE_OPTIONAL),
            'level' => new external_value(PARAM_TEXT, 'Status level', VALUE_OPTIONAL),
        ]);
    }
}
