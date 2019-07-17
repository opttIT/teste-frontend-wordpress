<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Front End</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="menu">
            <div class="container">
                <div class="row">
                    <section class="logo col-md-2 col-12 text-center">logo</section>
                    <nav class="main-menu col-md-10 text-right"><?php wp_nav_menu( 
                        array( 
                            'theme_location' =>  'my_main_menu' ) ); ?>
                    </nav>
                </div>
            </div>
        </section>
    </header>