
1. Create **theme-customizer.php** in include folder

2. In **functions.php**, add include and action...

```

include( get_theme_file_path( '/includes/theme-customizer.php' ));
include( get_theme_file_path( '/includes/customizer/social.php' ));

add_action( 'customize_register', 'ju_customize_register' );

```



3. Create **customizer** folder within **includes** folder

4. Create **socia.php** in customizer folder


