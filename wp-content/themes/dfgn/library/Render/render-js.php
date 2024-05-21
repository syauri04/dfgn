<?php
class RenderJS
{
    private static $script = '';

    public static function start()
    {
        ob_start();
    }

    public static function end()
    {
        self::$script .= ob_get_clean();
    }

    public static function PrintJS()
    {
        if (!empty(self::$script)) {
            $WithoutTags = str_replace(['<script>', '</script>'], '', self::$script);
            echo $WithoutTags;
        }
    }
}