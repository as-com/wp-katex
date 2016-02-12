<?php
/*
Plugin Name: WP-KaTeX
Plugin URI: http://andrewsun.com/projects/wp-katex/
Description: Embeds beautiful math in your posts with KaTeX, a very fast LaTeX typesetter.
Version: 1.5.1+1
Author: Andrew Sun
Author URI: http://andrewsun.com/
License: GPL2
*/
/*  Copyright 2015  Andrew Sun

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( is_admin() && ( !defined( 'DOING_AJAX' ) || !DOING_AJAX ) ) {
	require 'scripts/admin.php';
}
else {
	require 'scripts/frontend.php';
}
