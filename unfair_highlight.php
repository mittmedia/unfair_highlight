<?php
/*
Plugin Name: Unfair Highlight
Plugin URI: https://github.com/mittmedia/unfair_highlight
Description: Use Unfair Highlights to push for selected blogs
Version: 1.0.0
Author: Fredrik Sundström
Author URI: https://github.com/fredriksundstrom
License: MIT
*/

/*
Copyright (c) 2012 Fredrik Sundström

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.
*/

require_once( 'wp_mvc/init.php' );

$unfair_highlight_app = new \WpMvc\Application();

$unfair_highlight_app->init( 'UnfairHighlight', WP_PLUGIN_DIR . '/unfair_highlight' );

// WP: Add pages
add_action( "network_admin_menu", "unfair_highlight" );
function unfair_highlight()
{
  add_submenu_page( 'settings.php', 'Unfair Highlight Settings', 'Unfair Highlight', 'manage_network', 'unfair_highlight_settings', 'unfair_highlight_settings_page');
}

function unfair_highlight_settings_page()
{
  global $unfair_highlight_app;

  $unfair_highlight_app->unfair_highlight_controller->index();
}