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
            $minifiedStyles = self::minifyCSS($stylesWithoutTags);
            echo $minifiedStyles;
        }
    }

    private static function minifyCSS($css)
    {
        // Remove comments, whitespace, and newlines
        $css = preg_replace('/\/\*.*?\*\//s', '', $css);  // Remove comments
        $css = preg_replace('/\s*([{}|:;,])\s+/', '$1', $css);  // Remove whitespace around symbols
        $css = preg_replace('/\s\s+/', ' ', $css);  // Reduce multiple spaces to single space
        $css = trim($css);  // Remove leading/trailing whitespace
        return $css;
    }
}
include('render-js.php');
include('minify-html.php');
