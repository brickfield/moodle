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

import Ajax from 'core/ajax';
import Template from 'core/templates';
import Log from 'core/log';

/**
 * Handles polling registration status and replaces the alert block with the new one.
 *
 * @module     tool_brickfield/registration
 * @copyright  2024 onward Brickfield Education Labs Ltd, https://www.brickfield.ie
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
export function init() {
    Ajax.call([{
        methodname: 'tool_brickfield_check_toolkit_validation',
        args: {},
        done: (data) => {
            if (data.status == -1) {
                // Status of -1 indicates the registration adhoc task is running.
                setTimeout(() => {
                    init();
                }, 2000);
            } else {
                replaceAlertBlock(data.message, data.level);
            }
        },
        fail: (err) => {
            Log.error(err);
        }
    }]);
}

/**
 * Replaces the existing alert block with a new one.
 * @param {string} message The notification message
 * @param {string} level The notification level
 */
const replaceAlertBlock = (message, level) => {
    Template.render('core/notification', {
        message: message,
        issuccess: level == 'success',
        iswarning: level == 'warning',
        iserror: level == 'error',
        closebutton: true
    }).then((html) => {
        const oldAlert = document.querySelector('.alert-block');
        let temp = document.createElement('div');
        temp.innerHTML = html;
        let newAlert = temp.firstChild;
        oldAlert.parentNode.insertBefore(newAlert, oldAlert);
        oldAlert.parentNode.removeChild(oldAlert);
        return;
    }).catch((err) => {
        Log.error(err);
    });
};
