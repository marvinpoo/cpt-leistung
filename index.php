<?php
/*
 * Plugin Name:       CPT: Leistung
 * Plugin URI:        https://mpw-immobilien.de/
 * Description:       Custom Post-Type: Leistung
 * Version:           1.0.0
 * Author:            MPW Immobilien
 * Author URI:        https://mpw-immobilien.de/
 * Text Domain:       cpt-leistung
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Copyright since 4th December 2018  MPW-Immobilien Michael Werner GmbH
 */

 /* Copyright 2019  Marvin Borisch für MPW immobilien

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

 function leistungen() {

	$labels = array(
		'name'                  => _x( 'Leistungen', 'Post Type General Name', 'cpt-leistung' ),
		'singular_name'         => _x( 'Leistung', 'Post Type Singular Name', 'cpt-leistung' ),
		'menu_name'             => __( 'Leistungen', 'cpt-leistung' ),
		'name_admin_bar'        => __( 'Leistungen', 'cpt-leistung' ),
		'archives'              => __( 'Leistungsarchiv', 'cpt-leistung' ),
		'attributes'            => __( 'Leistungs Attribut', 'cpt-leistung' ),
		'parent_item_colon'     => __( 'Leistung', 'cpt-leistung' ),
		'all_items'             => __( 'Leistungen', 'cpt-leistung' ),
		'add_new_item'          => __( 'Neue Leistung', 'cpt-leistung' ),
		'add_new'               => __( 'Leistung hinzufügen', 'cpt-leistung' ),
		'new_item'              => __( 'Neue Leistung', 'cpt-leistung' ),
		'edit_item'             => __( 'Leistung bearbeiten', 'cpt-leistung' ),
		'update_item'           => __( 'Leistung updaten', 'cpt-leistung' ),
		'view_item'             => __( 'Leistung betrachten', 'cpt-leistung' ),
		'view_items'            => __( 'Leistungen betrachten', 'cpt-leistung' ),
		'search_items'          => __( 'Leistung suchen', 'cpt-leistung' ),
		'not_found'             => __( 'leistung nicht gefunden', 'cpt-leistung' ),
		'not_found_in_trash'    => __( 'Leistung nicht im Papierkorb gefunden', 'cpt-leistung' ),
		'featured_image'        => __( 'Leistungsbild', 'cpt-leistung' ),
		'set_featured_image'    => __( 'Leistungsbild festlegen', 'cpt-leistung' ),
		'remove_featured_image' => __( 'Leistungsbild entfernen', 'cpt-leistung' ),
		'use_featured_image'    => __( 'Als Leistungsbild benutzen', 'cpt-leistung' ),
		'insert_into_item'      => __( 'In Leistung einfügen', 'cpt-leistung' ),
		'uploaded_to_this_item' => __( 'Zur Leistung hinzufügen', 'cpt-leistung' ),
		'items_list'            => __( 'Liste der leistungen', 'cpt-leistung' ),
		'items_list_navigation' => __( 'Leistungs Navigation', 'cpt-leistung' ),
		'filter_items_list'     => __( 'Leistungen filtern', 'cpt-leistung' ),
	);
	$args = array(
		'label'                 => __( 'Leistung', 'cpt-leistung' ),
		'description'           => __( 'Leistungen', 'cpt-leistung' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-tools',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'leistung_type', $args );

}
add_action( 'init', 'leistungen', 0 );
?>
