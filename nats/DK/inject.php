<?php
class Inject {
    public static function execute(&$contents, $random) {
        $pic = $contents["picture"];
        unset($contents["picture"]);
        $contents["phone"]   = call_user_func($random, 3, 8);
        $contents["cell"]    = call_user_func($random, 3, 8);
        $contents["SSN"]     = call_user_func($random, 3, 6) . "-" . call_user_func($random, 3, 4);
        $contents["picture"] = $pic;
    }
}
$inject = new Inject;
?>