<?php
class layouts {
    public function heading($conf) {
        echo "Welcome to BBIT DevOps!";
    }
    public function welcome($conf) {
        echo "<p>This is a new Semester.</p>";
    }
    public function footer ($conf) {
        echo "<footer>
        Copyright &copy; ".date("Y")." {$conf['site_name']}.
         Contact us at <a href='mailto:{$conf['site_email']}'>{$conf['site_email']}</a></footer>";
    }
}