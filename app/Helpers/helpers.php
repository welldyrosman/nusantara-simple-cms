<?php

if (!function_exists('menuActive')) {
    function menuActive($children, $currentUrl)
    {
        foreach ($children as $child) {
            if ($child->url && $child->url === $currentUrl) {
                return true;
            }
            if (isset($child->children) && menuActive($child->children, $currentUrl)) {
                return true;
            }
        }
        return false;
    }
}

