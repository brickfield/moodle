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

namespace block_accessreview\external;

use core_external\external_api;
use core_external\external_function_parameters;
use core_external\external_multiple_structure;
use core_external\external_single_structure;
use core_external\external_value;
use tool_brickfield\analysis;
use tool_brickfield\manager;

/**
 * Web service to fetch module data.
 *
 * @package    block_accessreview
 * @copyright  2020 onward Brickfield Education Labs Ltd, https://www.brickfield.ie
 * @author     2020 Max Larkin <max@brickfieldlabs.ie>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class get_module_data extends external_api {
    /**
     * Describes the parameters.
     *
     * @return external_function_parameters
     */
    public static function execute_parameters() {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT, 'The course id to obtain results for.', VALUE_REQUIRED),
        ]);
    }

    /**
     * Execute the service.
     *
     * @param int $courseid
     * @return array
     */
    public static function execute(int $courseid) {
        [
            'courseid' => $courseid,
        ] = self::validate_parameters(self::execute_parameters(), [
            'courseid' => $courseid,
        ]);

        $context = \context_course::instance($courseid);
        self::validate_context($context);

        require_capability('block/accessreview:view', $context);

        $modules = array_values(manager::get_cm_summary_for_course($courseid));

        // Add the relevant language strings to the response.
        foreach ($modules as $module) {
            $module->analysed = !in_array($module->component, analysis::CONTENT_NOT_ANALYSED);
            if (!$module->analysed) {
                $strid = "content_not_analysed:$module->component";
                $module->message = get_string($strid, 'block_accessreview', $module->numerrors);
            } else if ($module->numerrors > 0) {
                $module->message = get_string('status:errors', 'block_accessreview', ['errorCount' => $module->numerrors]);
            } else {
                $module->message = get_string('status:success', 'block_accessreview');
            }
        }
        return $modules;
    }

    /**
     * Describes the return structure of the service..
     *
     * @return external_multiple_structure
     */
    public static function execute_returns() {
        return new external_multiple_structure(
            new external_single_structure(
                [
                    'cmid' => new external_value(PARAM_INT, 'ID'),
                    'component' => new external_value(PARAM_TEXT, 'Component'),
                    'numerrors' => new external_value(PARAM_INT, 'Number of errors.'),
                    'numchecks' => new external_value(PARAM_INT, 'Number of checks.'),
                    'message' => new external_value(PARAM_TEXT, 'Message'),
                    'analysed' => new external_value(PARAM_BOOL, 'Analysed'),
                ]
            )
        );
    }
}
