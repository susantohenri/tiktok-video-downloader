<?php

/**
 * Tiktok Video Downloader
 *
 * @package     TiktokVideoDownloader
 * @author      Henri Susanto
 * @copyright   2022 Henri Susanto
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Tiktok Video Downloader
 * Plugin URI:  https://github.com/susantohenri
 * Description: Wordpress plugin for generating shipping policy base on user supplied information
 * Version:     1.0.0
 * Author:      Henri Susanto
 * Author URI:  https://github.com/susantohenri
 * Text Domain: TiktokVideoDownloader
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

add_shortcode('tiktok-video-downloader', function () {
    $file_name = plugin_dir_path(__FILE__) . "gusbaha.mp4";
    $url = 'https://v16-webapp.tiktok.com/abefe4f0f3b88d9301b4fb601e20c911/636f723e/video/tos/alisg/tos-alisg-pve-0037/ogS4IwBjBgXURhVIEh4iNQMAgIHzYfPfMQy06C/?a=1988&ch=0&cr=0&dr=0&lr=tiktok&cd=0%7C0%7C1%7C0&cv=1&br=1004&bt=502&cs=0&ds=3&ft=kLO5qy54Zmo0PU78dBkVQbkBDiHKJdmC0&mime_type=video_mp4&qs=0&rc=NjRoOTk5ZTs7O2gzNWRmZEBpM2ZlaGk6ZjdmZzMzODgzNEA0NWFfLTNeXmAxLmFhLTUuYSMxMTQ2cjQwc2RgLS1kLy1zcw%3D%3D&l=202211120414140102440492192429376F&btag=80000';

    if (file_put_contents($file_name, file_get_contents($url))) {
        header('Content-type: octet/stream');
        header('Content-disposition: attachment; filename=' . $file_name . ';');
        header('Content-Length: ' . filesize($file_name));
        readfile($file_name);
        exit;
    } else {
        echo "File downloading failed.";
    }

    return 'hello';
});
