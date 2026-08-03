<?php
defined('MOODLE_INTERNAL') || die();

class block_myfirstblock extends block_base {

    public function init() {
        $this->title = get_string('pluginname', 'block_myfirstblock');
    }

    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        global $DB;

        $coursecount = $DB->count_records('course') - 1; // מינוס 1 כדי לא לספור את ה-Site course

        $this->content = new stdClass();
$coursetext = ($coursecount == 1) ? 'course' : 'courses';
$this->content->text = "There are <strong>{$coursecount}</strong> {$coursetext} on this site.";        $this->content->footer = '';

        return $this->content;
    }
}