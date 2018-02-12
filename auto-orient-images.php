<?php

/**
 * Kirby Auto-Orient Images
 *
 * @version   1.0.0
 * @author    Pedro Borges <oi@pedroborg.es>
 * @copyright Pedro Borges <oi@pedroborg.es>
 * @link      https://github.com/pedroborges/kirby-auto-orient-images
 * @license   MIT
 */

if (c::get('auto-orient-images', true)) {
    kirby()->hook(['panel.file.upload', 'panel.file.replace'], function($file) {
        if ($file->mime() === f::extensionToMime('jpeg')) {
            $image = new abeautifulsite\SimpleImage($file->root());
            $image->auto_orient();
            $image->save();
        }
    });
}
