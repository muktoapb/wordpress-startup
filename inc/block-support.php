<?php 
/**
 * Block Support
 *
 * @package WordPress
 * @subpackage Custom_Theme
 * @since Custom Theme 1.0
 */

// Add support for custom colors in the block editor
add_theme_support( 'editor-color-palette', array(
    array(
        'name'  => esc_attr__( 'Black', 'mukto' ),
        'slug'  => 'custom-black',
        'color' => '#000',
    ),
    array(
        'name'  => esc_attr__( 'Primary', 'mukto' ),
        'slug'  => 'custom-primary',
        'color' => '#484847',
    ),
    array(
        'name'  => esc_attr__( 'Dark Gray', 'mukto' ),
        'slug'  => 'custom-dark-gray',
        'color' => '#757575',
    ),
    array(
        'name'  => esc_attr__( 'Mid Gray', 'mukto' ),
        'slug'  => 'custom-min-gray',
        'color' => '#d8d8d8',
    ),
    array(
        'name'  => esc_attr__( 'Light Gray', 'mukto' ),
        'slug'  => 'custom-light-gray',
        'color' => '#e9e8e8',
    ),
    array(
        'name'  => esc_attr__( 'Almost White', 'mukto' ),
        'slug'  => 'custom-almost-white',
        'color' => '#f4f4f4',
    ),
    array(
        'name'  => esc_attr__( 'White', 'mukto' ),
        'slug'  => 'custom-white',
        'color' => '#fff',
    ),
    
) );

// Add support for custom font sizes in the block editor
add_theme_support( 'editor-font-sizes', array(
    array(
        'name'      => esc_attr__( 'Small', 'mukto' ),
        'shortName' => esc_attr__( 'S', 'mukto' ),
        'size'      => 12,
        'slug'      => 'small',
    ),
    array(
        'name'      => esc_attr__( 'Normal', 'mukto' ),
        'shortName' => esc_attr__( 'M', 'mukto' ),
        'size'      => 16,
        'slug'      => 'normal',
    ),
    array(
        'name'      => esc_attr__( 'Large', 'mukto' ),
        'shortName' => esc_attr__( 'L', 'mukto' ),
        'size'      => 20,
        'slug'      => 'large',
    ),
    array(
        'name'      => esc_attr__( 'Huge', 'mukto' ),
        'shortName' => esc_attr__( 'XL', 'mukto' ),
        'size'      => 36,
        'slug'      => 'huge',
    ),
) );
// Add support for custom line heights in the block editor
add_theme_support( 'editor-line-height', array(
    array(
        'name'  => esc_attr__( '1.2', 'mukto' ),
        'slug'  => 'line-height-1-2',
        'value' => 1.2,
    ),
    array(
        'name'  => esc_attr__( '1.5', 'mukto' ),
        'slug'  => 'line-height-1-5',
        'value' => 1.5,
    ),
    array(
        'name'  => esc_attr__( '2', 'mukto' ),
        'slug'  => 'line-height-2',
        'value' => 2,
    ),
) );
// Add support for custom spacing in the block editor
add_theme_support( 'editor-spacing', array(
    array(
        'name'  => esc_attr__( 'Small', 'mukto' ),
        'slug'  => 'spacing-small',
        'value' => 8,
    ),
    array(
        'name'  => esc_attr__( 'Medium', 'mukto' ),
        'slug'  => 'spacing-medium',
        'value' => 16,
    ),
    array(
        'name'  => esc_attr__( 'Large', 'mukto' ),
        'slug'  => 'spacing-large',
        'value' => 32,
    ),
) );

// editor styles
add_theme_support( 'editor-styles' );
add_editor_style( 'assets/css/editor-style.css' );
