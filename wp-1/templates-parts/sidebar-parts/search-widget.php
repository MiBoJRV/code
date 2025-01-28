<div class="search-widget sidebarSearch">
<style>
.sidebarSearch .c-filter-widget__inner > .col-md-12 > .row > div {
    width: 100%;
}
.sidebarSearch .c-filter-widget__inner > .col-md-12 > .row > div .col-xs-12 {
    width: 50%;
}
.sidebarSearch .c-filter-widget__inner > .col-md-12 > .row > .col-md-5 {
    margin-top: 15px;
}
.sidebarSearch .col-lg-1 {
    width: 100%;
}
.sidebarSearch .col-lg-1:last-child > .form-group {
    margin-bottom: 0;
}
.sidebarSearch{
    margin: 0 auto 30px;
    padding: 30px;
    background-color: #fff;
    /*border: 1px solid #D5D5D5;*/
    box-shadow: 0px 3px 30px #0000001F;
}
.sidebarSearch h3  {
    text-align: center;
    margin: 0 auto 12px;
    font-size: 24px;
}
.sidebarSearch .form-control {
   border: 1px solid #C8C8C8;
    height: 50px;
    font: 500 16px/24px var(--body_font);
    background: #F5F5F5;
    border-radius: 0;
   color: rgba(41, 41, 41, 0.5);
}
.sidebarSearch .form-control::-webkit-input-placeholder {
    color:rgba(41, 41, 41, 0.5);
}
.sidebarSearch .form-control::-moz-placeholder {
    color:rgba(41, 41, 41, 0.5);
    opacity: 1;
}
.sidebarSearch .form-control select {
    color:rgba(41, 41, 41, 0.5);
}
.sidebarSearch .form-control[disabled], 
.sidebarSearch .form-control[readonly], 
.sidebarSearch fieldset[disabled] .form-control {
    background-color:#F5F5F5 ;
}
.sidebarSearch #resortpro-widget-form label {
    display: none;
}
.sidebarSearch .has-feedback label~.form-control-feedback {
    top: 0;
}
.sidebarSearch .resortpro-search-submit-button-block button {
    width: 100%;
    background: var(--main_color);
    border: none;
    color: #fff;
    height: 65px;
    font: 600 16px/25px var(--body_font);
    padding: 8px;
}
.sidebarSearch .resortpro-search-submit-button-block button:hover {
    background: #007ed9;
}
.sidebarSearch .c-search-widget__item .form-control.is-focused, 
.sidebarSearch .c-search-widget__item .form-control:focus {
    border-color: #ccc;
}
.sidebarSearch .date-group .glyphicon-calendar{
   color:rgba(41, 41, 41, 0.5);
   top:16px; 
}

/*Responsivness*/
@media(max-width: 991px) {
.sidebarSearch .c-filter-widget__inner > .col-md-12 > .row > .col-md-5 .col-md-6 {
    width: 100%;
}
}

@media(max-width: 767px) {
.c-filter-widget__inner > .col-md-12 > .row > div .col-xs-12 {
    width: 100%;
}
}
</style>
    <h3>Search Rentals</h3>
    <?php dynamic_sidebar( 'sidebar-widget' ); ?>
</div><!-- end search-widget -->