<style>
/*/templates-parts/css-parts/logo-shapes.php*/
<?php if(get_field('header_shapes', 268)=='Classic'): ?>

    <?php elseif(get_field('header_shapes', 268)=='Trapeze'): ?>
        .page-id-6 .mainLogo{
            top: 0;
        }
        .page-id-6 .logo img.trapeze{
            top: -127px;    
        }
    <?php elseif(get_field('header_shapes', 268)=='Ellipse'): ?>
        .logo img.ellipse{
            top: -72px;
        }
        .mainLogo{
            top: 0px;
        }     
    <?php elseif(get_field('header_shapes', 268)=='Circle'): ?>
        .logo img.circle{
            top: -25px;
        }
        .mainLogo{
            top: -5px;
        } 
    <?php elseif(get_field('header_shapes', 268)=='SmallTrapetion'): ?>
        .logo img.trapezeSmall{
            top: 25px;
        }
        .mainLogo{
            top: 0;
        }         
<?php endif; ?>
</style>