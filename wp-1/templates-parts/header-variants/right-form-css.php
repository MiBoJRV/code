<style>
/*Standard Logo Css*/
.logo a .logo-white{
    display: none;
}
.logo a {
    position: absolute;
    top: 50%;
    left: 50px; 
    z-index: 0; 
    max-width: 200px;
    transform:translate(0, -50%);
}
.logo {
    margin: 0;
    width: 20%;
}
.logo img {
    max-width: 100%!important;
}
header .contact a {
    padding: 10px 25px;
}
header .phone_number {
    font-size: 20px;
}
.modal_btn svg {
    height: 22px;
}
header .mail svg {
    height: 22px;
}
header .flex_wrapper {
    padding: 20px 50px 20px 0;
    border-bottom:0;
    box-shadow: 0 3px 25px rgba(0,0,0,.16);
}
header .modal_btn {
    display: none;
}
header nav {
    text-align: center;
    margin-left: auto;
    margin-right: 20px;
}
header .phone_number:hover {
    color:  #76AFB3;
}

/*modal_search*/
.modal_search{
    display:block;
    position: relative;
    padding-left: 20px;
    margin-left: 15px;
    border-left: 1px solid rgba(41, 41, 41, 0.25);
    background:transparent;
}
.modal_search .c-search-widget__fields{
   margin:0; 
}
.modal_search .modalSearch{
        border-radius: 3px;
    overflow: hidden;
}
.modal_search form .form-control{
    border: none;
    box-shadow: none;
}
.modal_search form input[type="text"], .modal_search form select{
    padding: 10px;
    width: 100%;
    border-radius: 0;
    height: auto;
    margin: 0;
    background: rgba(42, 42, 42, 0.08);
    font-weight: 500 ;
    color: rgba(41, 41, 41, 0.5);
    overflow: hidden;
    max-width: 175px;
    font-weight: 500;
    font-size: 12px;
    color: #16193D80;
}
.modal_search form button{
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 40px;
    background-color:var(--main_color);
    border: none;
    border-radius: 0 3px 3px 0;
    text-align: center;
    cursor: pointer;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
}
header .modal_search form button img{
        width: 15px;
    height: 15px;
}
header .modal_search form{
    position:static;
    width:auto;
    height:auto;
    transform:none;
}
.modal_search .close_modal{
    display:none;
}
/*end modal_search*/


header .inputLeft .c-select-list.form-control select {
    font-weight: 500;
    font-size: 12px;
    color: #16193D80;
}
header .modal_search form button img {
    width: 15px;
    height: 15px;
}
.for-widget-toggle{
   display:none; 
}
/*Responsive*//*Responsive*//*Responsive*/
@media(max-width: 1670px) {
    header .phone_number {
        font-size: 20px;
    }
    header nav > .menu-header-menu-container > ul > li > a {
        text-transform: uppercase;
    }
}
@media(max-width: 1520px) {
    header nav > .menu-header-menu-container > ul > li > a {
        text-transform: uppercase;
    }
    header nav li a {
        padding: 10px 14px;
        font-size:14px;
    }
    header .contact a{
        font-size:14px;
    }
    /*header .phone_number {
        font-size: 18px;
    }
    header .contact a {
        padding: 10px 10px;
    }*/
}
@media(max-width: 1420px) {
    header .modal_search {
        padding-left: 10px;
        margin-left: 10px;
    }
    header .contact {
        margin-right: 10px;
    }
    header .mail {
        padding-left: 10px;
    }
}
@media(max-width:1400px){
    header .flex_wrapper{
        padding-right:20px;
    }
    .logo a{
        left:20px;
    }
}
@media(max-width: 1199px) {
.logo img {
    width: 200px;
    height: auto;
    top:0;
}
.logo a {
    position: static;
    padding:0;
}
.logo {
    width: auto;
}
header .contact{
    display:none;
}
.videoSearch #resortpro-widget-form .item.search_btn {
    flex-grow: 1;
}
.modal_btn{
    border-left:2px solid rgba(0,0,0,.1);
}
}
@media(max-width:767px){

header .modal_search {
    display: none;
}
<?php if(get_field('mobile_search_widget', get_homePageId())=='Full Screen Popup'):?>
header .modal_btn {
    display: block;
}
.modal_search {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(7, 8, 8, 0.75);
    z-index: 9;
    margin-left: 0;
    padding:0;
    padding-left:0!important;
    margin:0!important;
    border:0;
}
header .modal_search form {
    position: absolute;
    top: 25%;
    left: 50%;
    width: 50%;
    transform: translate(-50%, -50%);
}
.modal_search form select {
    max-width: 100%;
    background: #fff;
}
header .modal_btn {
    display: inline-block;
}
.modal_search .close_modal {
    color: #fff;
    font-size: 34px;
    position: absolute;
    top: 15%;
    right: 20%;
    cursor: pointer;
}
.rightSide .modal_search .close_modal {
    display: block; 
}
.modal_search form{
    position: absolute;
    top: 25%;
    left: 50%;
    width: 50%;
    transform: translate(-50%, -50%);
}
<?php else: ?>
header .modal_btn{
    display:none;
}
.modal_search{
    position: absolute;
    right: 0;
    left:auto;
    top: 100%;
    z-index: 9;
    margin: 0!important;
    border-left: 0!important;
    padding-left:0!important;
    width:220px;
    height:auto!important;
}
.modal_search form input[type="text"], .modal_search form select{
    background: #fff;
    border: 2px solid var(--main_color);
    max-width:none;
}
.for-widget-toggle{
    display: block;
    border-left: 2px solid rgba(0,0,0,.1);
    position: relative;
    color: #4A4A4A;
    padding-left: 20px;
    margin-left: 20px;
}
.for-widget-toggle svg{
    height: 22px
}
<?php endif; ?>
}
</style>