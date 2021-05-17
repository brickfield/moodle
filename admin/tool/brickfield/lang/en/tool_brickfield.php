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
 * Plugin strings are defined here.
 *
 * @package     tool_brickfield
 * @category    string
 * @copyright   2020 Brickfield Education Labs, https://www.brickfield.ie - Author: Karen Holland
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Accessibility toolkit';
$string['accessibility'] = 'Accessibility';
$string['accessibilitydisabled'] = 'The Brickfield accessibility toolkit is not enabled on this site. Contact your site administrator to enable.';
$string['accessibilityreport'] = 'Accessibility toolkit';
$string['analysistype'] = 'Enable analysis requests';
$string['analysistypedisabled'] = 'Content analysis is disabled';
$string['analysistype_desc'] = 'Allow content accessibility analysis to be requested';
$string['analysis:disabled'] = 'Disabled';
$string['analysis:byrequest'] = 'By request';
$string['brickfield'] = 'Brickfield toolkit';
$string['brickfield:viewcoursetools'] = 'View reports per courses';
$string['brickfield:viewsystemtools'] = 'View reports for all courses';
$string['allcourses'] = 'All reviewed courses ({$a})';
$string['allcoursescat'] = 'All reviewed courses for category {$a->catname} ({$a->count})';
$string['batch'] = 'Batch limit';
$string['bulkprocesscaches'] = 'Process bulk caching';
$string['bulkprocesscourses'] = 'Process bulk batch accessibility checking';
$string['checkidvalidation'] = 'Task to check for any invalid checkids';
$string['checktype'] = 'Content type';
$string['checktype:form'] = 'Form';
$string['checktype:image'] = 'Image';
$string['checktype:layout'] = 'Layout';
$string['checktype:link'] = 'Link';
$string['checktype:media'] = 'Media';
$string['checktype:table'] = 'Table';
$string['checktype:text'] = 'Text';
$string['confirmationmessage'] = 'This course has been scheduled for analysis. Analysis will be completed at the earliest
by {$a}. Check back after then.';
$string['contactadmin'] = 'Please contact your administrator to complete the registration.';
$string['core_course'] = 'Course';
$string['core_question'] = 'Question banks';
$string['count'] = 'Count';
$string['deletehistoricaldata'] = 'Delete historical checks results';
$string['emptycategory'] = 'No courses found for category {$a}';
$string['enableaccessibilitytools'] = 'Enable accessibility tools';
$string['enableaccessibilitytools_desc'] = 'The accessibility toolkit helps identify accessibility issues in courses.';
$string['errorlink'] = 'Edit error instance for {$a}';
$string['errors'] = 'Errors: {$a}';
$string['eventanalysis_requested'] = 'Content analysis requested';
$string['eventanalysis_requesteddesc'] = 'Content analysis was requested for course {$a}.';
$string['eventreport_viewed'] = 'Accessibility report viewed';
$string['eventreport_vieweddesc'] = 'Accessibility report was viewed for course id {$a->course},
category id {$a->category}, tab {$a->tab}.';
$string['eventreport_downloaded'] = 'Accessibility summary downloaded';
$string['eventreport_downloadeddesc'] = 'Accessibility summary was downloaded for course id {$a}.';
$string['failed'] = 'Failed';
$string['failedcount'] = 'Failed: {$a}';
$string['tools'] = 'Reports';
$string['invalidaccessibilitytool'] = 'Invalid accessibility subplugin requested.';
$string['invalidcategoryid'] = 'Invalid category, please check your input';
$string['invalidcourseid'] = 'Invalid course, please check your input';
$string['invalidlinkphrases'] = 'click|click here|here|more|more here|info|info here|information|information here|read more|read more here|further information|further information here|further details|further details here';
$string['module'] = 'Module';
$string['modulename'] = 'Name';
$string['noerrorsfound'] = 'No common accessibility errors were found for your search parameters. Congratulations!';
$string['notregistered'] = 'Your accessibility toolkit needs to be registered.';
$string['notvalidated'] = 'Your accessibility toolkit is functional while being validated.';
$string['pagedesc:checktype'] = '<p>In order to summarise and analyse the results of the various checks conducted, we group these checks into different content types. Hence, all image-related accessibility check results are in the "Image" content type group, all layout-related accessibility check results are in the "Layout" content type group, and so on.</p><p>Activities are included as either activities, resources or content areas relating to the courses themselves.</p><p>The content type chart page displays the error breakdown per content type group: Image, Layout, Link, Media, Table, and Text.</p>';
$string['pagedesc:pertarget'] = '<p>In order to summarise and analyse the check results per activity, we group these check results into the different activities detected.</p><p>Activities are included as either activities, resources, or other content areas relating to the courses themselves. Each activity with no detected errors is counted as passed, each activity with one or more detected errors is counted as failed. The ratio of passed to failed activities is then displayed.</p><p>The activity breakdown chart page displays the ratio of passed to failed instances in total, per activity, such as assignment, course, label etc.</p>';
$string['pagedesctitle:checktype'] = 'Content types explained';
$string['pagedesctitle:pertarget'] = 'Activity breakdown explained';
$string['passed'] = 'Passed';
$string['passedcount'] = 'Passed: {$a}';
$string['perpage'] = 'Items to show per page';
$string['privacy:metadata'] = 'The Accessibility checks report plugin does not store any personal data.';
$string['processanalysisrequests'] = 'Process content analysis requests';
$string['registernow'] = 'Please register now.';
$string['registrationinfo'] = '<p>This registration process allows you to use the Brickfield accessibility toolkit starter version for your registered Moodle site.</p><p>This usage is subject to the <a href="{$a}" target="_blank">Brickfield Education Labs terms and conditions (opens in new window)</a> and which you agree to, by using this product.</p>';
$string['schedule:blocknotscheduled'] = '<p>This course has not yet been scheduled for analysis, to find common accessibility issues.</p>';
$string['schedule:notscheduled'] = '<p>This course has not yet been scheduled for analysis to find common accessibility issues.</p><p>By clicking on the "Submit for analysis" button, you confirm that you want all your relevant course HTML content, such as course section descriptions, activity descriptions, questions, pages, and more, to be scheduled for analysis.</p><p>This analysis will conduct multiple common accessibility checks on your course HTML content, and those results will then display on these accessibility toolkit report pages. The analysis will be processed in the background, by scheduled tasks, so its speed of completion will depend on task timings and task run schedules.</p>';
$string['schedule:requestanalysis'] = 'Submit for analysis';
$string['schedule:scheduled'] = 'This course has been scheduled for analysis.';
$string['schedule:sitenotscheduled'] = '<p>The global (course independent) content has not yet been scheduled for analysis to find common accessibility issues.</p><p>By clicking on the "Submit for analysis" button, you confirm that you want all your relevant global (course independent) content to be scheduled for analysis.</p><p>This analysis will conduct multiple common accessibility checks on this content, and those results will then display on these accessibility toolkit report pages. The analysis will be processed in the background, by scheduled tasks, so its speed of completion will depend on task timings and task run schedules.</p>';
$string['schedule:sitescheduled'] = 'The global (course independent) content has been scheduled for analysis.';
$string['settings'] = 'Accessibility toolkit settings';
$string['taberrors'] = 'Content type errors';
$string['targetratio'] = 'Activity pass ratio';
$string['tblcheck'] = 'Check';
$string['tbledit'] = 'Edit';
$string['tblhtmlcode'] = 'Existing HTML code';
$string['tblline'] = 'Line';
$string['tbltarget'] = 'Activity';
$string['titleerrorscount'] = 'Error details: (showing first {$a} errors)';
$string['titleactivityresultsall'] = 'Results per activity: all reviewed courses ({$a->count} courses)';
$string['titleactivityresultspartial'] = 'Results per activity: course {$a->name}';
$string['titleall'] = 'Error details: all reviewed courses ({$a->count} courses)';
$string['titlechecktyperesultsall'] = 'Results per content type: all reviewed courses ({$a->count} courses)';
$string['titlechecktyperesultspartial'] = 'Results per content type: course {$a->name}';
$string['titleerrorsall'] = 'Error details: all reviewed courses ({$a->count} courses)';
$string['titleerrorspartial'] = 'Error details: course {$a->name}';
$string['titlepartial'] = 'Error details: course {$a->name}';
$string['titleprintableall'] = 'Course {$a->name}';
$string['titleprintablepartial'] = 'Course {$a->name}';
$string['toptargets'] = 'Failed activities';
$string['toperrors'] = 'Top errors';
$string['totalactivities'] = 'Total activities';
$string['totalactivitiescount'] = 'Total activities: {$a}';
$string['totalerrors'] = 'Total errors';
$string['totalgrouperrors'] = 'Total (sum) errors per content type';
$string['updatesummarydata'] = 'Update site summarydata';
$string['warningcheckidbody'] = 'There is an issue with a Brickfield check
 which is active but not listed in the database. Please investigate.';
$string['warningcheckidsubject'] = 'Brickfield Toolkit checkID warning';

// Check descriptions.
$string['checkdesc:alinksdontopennewwindow'] = 'Links opening into a new window should warn users in advance.';
$string['checkdesc:amustcontaintext'] = 'A link needs to contain text to be perceivable.';
$string['checkdesc:areadontopennewwindow'] = 'Areas, used in image maps, opening into a new window should warn users in advance.';
$string['checkdesc:areahasaltvalue'] = 'Areas, used in image maps, should not be missing alt (alternative) text, similar to images.';
$string['checkdesc:asuspiciouslinktext'] = 'Link text should be descriptive and provide context about its destination.';
$string['checkdesc:basefontisnotused'] = 'Basefont elements (traditionally used for formatting) are not accessible and should not be used.';
$string['checkdesc:blinkisnotused'] = 'Blink elements, which blink on and off, are not accessible and should not be used.';
$string['checkdesc:boldisnotused'] = 'Bold (b) elements should not be used; "strong" should be used instead.';
$string['checkdesc:contenttoolong'] = 'The overall page content length should not exceed 500 words.';
$string['checkdesc:csstexthascontrast'] = 'The colour contrast between the text and background is too low.';
$string['checkdesc:embedhasassociatednoembed'] = 'Embed elements (for embedding multimedia) should not be missing their corresponding "noembed" elements.';
$string['checkdesc:headerh3'] = 'Headers following after H3 headers (the editor large header option) should not break the page heading hierarchy.';
$string['checkdesc:headershavetext'] = 'A header needs to contain text to be perceivable.';
$string['checkdesc:iisnotused'] = 'Italic (i) elements should not be used; "em" should be used instead.';
$string['checkdesc:imgaltisdifferent'] = 'Image alt (alternative) text should not be the image filename.';
$string['checkdesc:imgaltistoolong'] = 'Image alt (alternative) text should not be more than the maximum allowed (125) characters.';
$string['checkdesc:imgaltnotemptyinanchor'] = 'Image alt (alternative) text should not be empty, especially when the image has a link going elsewhere.';
$string['checkdesc:imgaltnotplaceholder'] = 'Image alt (alternative) text should not be a simple placeholder text, such as "image".';
$string['checkdesc:imghasalt'] = 'Image alt (alternative) text should not be missing for image elements, unless purely decorative with no meaning.';
$string['checkdesc:imgwithmaphasusemap'] = 'Image maps, with clickable areas, need matching "usemap" and "map" elements.';
$string['checkdesc:legendtextnotempty'] = 'Legend elements, used for captioning fieldset elements, should contain text.';
$string['checkdesc:marqueeisnotused'] = 'Marquee (auto-scrolling) elements are not accessible and should not be used.';
$string['checkdesc:noheadings'] = 'No headers makes content less structured and harder to read.';
$string['checkdesc:objectmusthaveembed'] = 'Object elements (for embedding external resources) should not be missing their corresponding "embed" elements.';
$string['checkdesc:objectmusthavetitle'] = 'Object elements (for embedding external resources) should not be missing their corresponding "title" descriptions.';
$string['checkdesc:objectmusthavevalidtitle'] = 'Object elements (for embedding external resources) should have corresponding "titles" with text.';
$string['checkdesc:strikeisnotused'] = 'Strike (strike-through) elements should not be used; "del" (deleted) should be used instead.';
$string['checkdesc:tabledatashouldhaveth'] = 'Tables ideally should not be missing headers.';
$string['checkdesc:tablesummarydoesnotduplicatecaption'] = 'Table summaries and captions should not be identical.';
$string['checkdesc:tabletdshouldnotmerge'] = 'Tables ideally should not have any merged cells.';
$string['checkdesc:tablethshouldhavescope'] = 'Table row or column scopes (used to map row and column to each cell) should be declared.';

// Registration process.
$string['activate'] = 'Activate';
$string['activated'] = 'The plugin is activated and ready to use.';
$string['activationform'] = 'Brickfield registration';
$string['activationheader'] = 'Brickfield activation';
$string['activationinfo'] = '<p>In order to use this plugin, you must provide valid keys for this site in this form.</p><p>Please <a href="{$a}" data-action="send_info" target="_blank">register at the Brickfield Portal (opens in new window)</a> to receive those keys if you do not already have them. </p><p>Once activated, your keys will then be validated via scheduled cron tasks.</p>';
$string['contenttypeerrors'] = 'Total results of activity content tests per course and per content type.';
$string['contentyperesults'] = 'Total passed/failed for content areas per course.';
$string['hashincorrect'] = 'The entered code is incorrect.';
$string['inactive'] = 'The plugin is inactive and cannot be used. Please enter valid registration keys, and press "Activate".';
$string['mobileservice'] = 'Mobile services enabled ({$a})';
$string['moreinfo'] = 'More information';
$string['numcourses'] = 'Number of courses ({$a})';
$string['numfactivities'] = 'Number of activities ({$a})';
$string['numfiles'] = 'Number of files ({$a})';
$string['numusers'] = 'Number of users ({$a})';
$string['percheckerrors'] = 'Number of specific tests and errors per check per course.';
$string['registration'] = 'Registration form';
$string['release'] = 'Moodle release ({$a})';
$string['secretkey'] = 'API key';
$string['secretkey_help'] = 'This code is available on the Brickfield portal after registration.';
$string['sendfollowinginfo'] = '<p>The following information will be periodically sent to contribute to overall statistics only. It will not be made public on any central listing.</p> {$a}';
$string['sitehash'] = 'Secret key';
$string['sitehash_help'] = 'This code is available on the Brickfield portal after registration.';
$string['usersmobileregistered'] = 'Number of users with registered mobile devices ({$a})';
$string['validationerror'] = 'Registration key validation has failed. Check that your registered site URL and keys are correct.';

// Tool section.
$string['activityresults:toolname'] = 'Activity breakdown summary';
$string['activityresults:toolshortname'] = 'Activity breakdown';
$string['advanced:toolname'] = 'Advanced summary';
$string['advanced:toolshortname'] = 'Advanced';
$string['checktyperesults:toolname'] = 'Content types summary';
$string['checktyperesults:toolshortname'] = 'Content types';
$string['errors:toolname'] = 'Error list summary';
$string['errors:toolshortname'] = 'Error list';
$string['printable:toolname'] = 'Summary report';
$string['printable:toolshortname'] = 'Summary report';
$string['printable:downloadpdf'] = 'Download PDF';
$string['printable:printreport'] = 'Printable report';
$string['error:nocoursespecified'] = 'This summary report requires a valid course id. Please access the accessibility toolkit from within a course, via the actions menu, which will then supply this required course id.';
$string['pdf:filename'] = 'Brickfield_Summaryreport_CourseID-{$a}';

// Advanced page.
$string['bannercontentone'] = 'The Enterprise Accessibility Toolkit has a full set of features to help your organisation improve accessibility of your courses. <a href="{$a}">Contact Brickfield Education Labs</a> to book a free demo of the advanced features.';
$string['bannercontenttwo'] = 'Build an effective and inclusive teaching and learning platform by finding content that does not meet the guidelines, fixing the issues and future-proofing your Moodle course content with accessible files, editor and enhanced features.';
$string['bannerheadingone'] = 'Upgrade to the Enterprise Accessibility Toolkit';
$string['contactus'] = 'Contact us';
$string['buttonone'] = 'Get a free demo';
$string['contentone'] = 'Automatically evaluate your course content and assessments for accessibility issues.';
$string['contenttwo'] = 'Bulk update unclear or missing text for web links, image descriptions and video subtitles.';
$string['contentthree'] = 'Provide your students with content in accessible formats including Audio, ePub and Electronic Braille.';
$string['contentfour'] = 'Identify which activities have the most accessibility issues to prioritise effort.';
$string['contentfive'] = 'Automatically fix out-of-date HTML tags.';
$string['contentsix'] = 'Provide teachers with just in time tips for creating better content.';
$string['footerheading'] = 'Footer section';
$string['headingone'] = 'Evaluate content';
$string['headingtwo'] = 'Remediation';
$string['headingthree'] = 'Accessible file formats';
$string['headingfour'] = 'Focus effort';
$string['headingfive'] = 'HTML fixes';
$string['headingsix'] = 'Performance support';
