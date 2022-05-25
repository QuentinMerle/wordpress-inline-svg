# Wordpress Inline SVG | File extension checker

Get media by id and check if it's an svg or jpg/png/..., to get inline svg or img element

## Important

`file_get_contents()` needs to be allow on your server

## 🔌 Usage

```php
// In functions.php
require get_template_directory() . '/classes/class-file-extension-checker.php';

// Usage in your file / template
$img  = get_sub_field('image'); // Works with: get_theme_mod( 'custom_logo' ) or get_post_thumbnail_id( $post->ID )
$size = 'thumbnail'; // full, medium, medium-large, custom...

new Wp_File_Ext_Check($img, $size);
```
