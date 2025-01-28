<style>

/*logo center css*/
.logo a .logo-white{
    display: none;
}
.logo a {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    z-index: 0; 
    max-width: 265px;    
    display: block;
    padding: 15px;
    <?php if(get_field('header_shapes')=='Classic'): ?>
        background: #fff;
        box-shadow: 0 7px 15px -7px #000;
    <?php endif; ?>
}
.rightCaret, .leftCaret {
    display: block;
    position: absolute;
    bottom: 6px;
    width: 30px;
    height: 31px;
    background: #fff;
    z-index: -2;
    box-shadow: 0 1px 20px #000;
    box-sizing: border-box;
}
.home .rightCaret, .home .leftCaret {
    bottom: 7px;
}
.leftCaret {
    left: 0;
    transform: translateX(-50%) rotate(45deg);
}
.rightCaret {
    right: 0;
    transform: translateX(50%) rotate(-45deg);
}
.logo {
    margin: 0;
    width: 400px;
    align-self: flex-start;
}
.logo img {
    height: 40px;
    width: 100%;
}
header .contact a {
    padding: 7px 40px;
}
header .phone_number {
    font-size: 24px;
}
.modal_btn svg {
    height: 19px;
}
header .mail svg {
    height: 19px;
}
header .flex_wrapper {
    padding: 15px 10px;
    justify-content: center;
    border-bottom: 0;
    box-shadow: 0 1px 20px #000;
}
header nav {
    order: -1;
    width: calc(50% - (400px / 2));
    text-align: right;
    z-index: 2;
}
header .rightSide {
    width: calc(50% - (400px / 2));
    z-index: 2;
}
header .caret {
    right: 0;
}
.logo a::after {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    width: calc(100% + 100px);
    height: 73%;
    transform: translateX(-50%);
    background: #fff;
    z-index: -1;
    box-sizing: border-box;
}
/*Shapes feature*//*Shapes feature*/
<?php if(get_field('header_shapes', 268)=='Classic'): ?>
        /*Classic*/
        .logo a::before {
            content: '';
            position: absolute;
            top: -5px;
            left: 0;
            width: 100%;
            height: calc(100% + 5px);
            background: #fff;
            z-index: -1;
            box-sizing: border-box;
        }
        .home .logo a::after {
            height: 73%;
            top: -2px;
        }
        .home .logo a::before {
            top: -6px;
        }
    <?php elseif(get_field('header_shapes', 268)=='Trapeze'): ?>
        /*Trapeze*/
        .logo img.trapeze{
            width: 200%!important;
            max-width: none;
            height: auto!important;
            position: absolute;
            left: -50%;
            top: -80px;
            opacity: 1!important;
        }
        /*Responsive Trapeze*/
        @media(min-width:1200px){
        .logo a::after{
            top: -20px;
            width: calc(192%);
            height: 100%;
            z-index: 1;            
        }
        .mainLogo{
            position: relative;
            top: 20px;
            z-index: 2;            
        }               
        }
        
        @media(max-width:1200px){
        .logo img.trapeze{
            display: none!important
        }
        }
    <?php elseif(get_field('header_shapes', 268)=='Ellipse'): ?> 
        .logo img.ellipse{
            width: 200%!important;
            max-width: none;
            height: auto!important;
            position: absolute;
            left: -50%;
            top: -100px;
            opacity: 1!important;  
            pointer-events:none;          
        }
        
        /*Responsive Trapeze*/
        @media(min-width:1200px){
        .logo a::after{
            top: -20px;
            width: calc(192%);
            height: 100%;
            z-index: 1;            
        }
        .mainLogo{
            position: relative;
            top: 20px;
            z-index: 2;            
        }               
        }
        
        @media(max-width:1200px){
        .logo img.ellipse{
            display: none!important
        }
        }
    <?php elseif(get_field('header_shapes', 268)=='Circle'): ?> 
        .logo img.circle{
            width: 200%!important;
            max-width: none;
            height: auto!important;
            position: absolute;
            left: -50%;
            top: 15px;
            opacity: 1!important;            
        }
        
        /*Responsive Trapeze*/
        @media(min-width:1200px){
        .logo a::after{
            top: -20px;
            width: calc(192%);
            height: 100%;
            z-index: 1;            
        }
        .mainLogo{
            position: relative;
            top: 20px;
            z-index: 2;            
        }               
        }
        
        @media(max-width:1200px){
        .logo img.circle{
            display: none!important
        }
        }
    <?php elseif(get_field('header_shapes', 268)=='SmallTrapetion'): ?> 
        .logo img.trapezeSmall{
            width: 200%!important;
            max-width: none;
            height: auto!important;
            position: absolute;
            left: -50%;
            top: 45px;
            opacity: 1!important;            
        }
        
        /*Responsive Trapeze*/
        @media(min-width:1200px){
        .logo a::after{
            top: -20px;
            width: calc(192%);
            height: 100%;
            z-index: 1;            
        }
        .mainLogo{
            position: relative;
            top: 20px;
            z-index: 2;            
        }               
        }
        
        @media(max-width:1200px){
        .logo img.trapezeSmall{
            display: none!important
        }
        }               
<?php endif; ?>

/*Responsive*//*Responsive*//*Responsive*/
@media(max-width: 1550px) {
header nav li a {
    padding: 10px;
}
.logo {
    width: 300px;
}
header nav, 
header .rightSide {
    width: calc(50% - (300px / 2));
}
}

@media(max-width: 1400px) {
header nav > .menu-header-menu-container > ul > li.menu-item > a {
    padding: 10px 7px;
}
header .rightSide {
    padding-left: 7px;
}
header .rightSide .contact a {
    padding: 7px 25px;
}
}

@media(max-width: 1300px) {
.logo a::after {
    top: -1px;
    height: 72%;
}
.home .logo a::after {
    height: 71%;
}
}

@media(max-width: 1270px) {
header nav > .menu-header-menu-container > ul > li.menu-item > a {
    font-size: 12px;
}
}

@media(max-width: 1199px) {
.logo img {
    width: 200px;
    height: auto;
}
.logo a {
    position: static;
    transform: none;
    box-shadow: none;
    padding: 0;
}
.logo a::before,
.logo a::after,
.leftCaret,
.rightCaret {
    display: none;
}
.logo {
    width: auto;
}
header nav {
    order: 0;
}
header .flex_wrapper {
    justify-content: space-between;
}
header .rightSide {
    width: auto;
    padding: 10px 0;
}
}
</style>