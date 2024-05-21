<?php
class RenderStyle
{
    private static $styles = '';

    public static function Style()
    {
        ob_start();
    }

    public static function EndStyle()
    {
        self::$styles .= ob_get_clean();
    }

    public static function PrintStyles()
    {
        if (!empty(self::$styles)) {
            // Remove <style> tags from the output
            $stylesWithoutTags = str_replace(['<style>', '</style>'], '', self::$styles);
            echo $stylesWithoutTags;
        }
    }
}
include('render-js.php');
include('minify-html.php');
