<style>
/*Rounded banner*/
.videoSearch .all_rentals,
.videoSearch .amenities-wrap,
.videoSearch h1 span:nth-child(2){
    display: none;
}
.videoSearch .item{
    float: left;
    width: calc(25% - 15px);
    padding: 8px 0;
}
.videoSearch .search_btn{
    float: left;
    width: 60px;
}
.videoSearch #resortpro-widget-form .item.noBorder select,
.videoSearch #resortpro-widget-form .item.noBorder input{
    border: none!important;
}
.videoSearch #resortpro-widget-form input,
.videoSearch #resortpro-widget-form select{
    background-color: transparent!important;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: 400;
    border-right: 1px solid #ccc!important;
}
.videoSearch #resortpro-widget-form select{
    color: #777;
}
.videoSearch #resortpro-widget-form input::-moz-placeholder{
    color: #777;
    opacity: 1!important;
}
.videoSearch #resortpro-widget-form input::-webkit-input-placeholder{
    color: #777;
}
.videoSearch #resortpro-widget-form{
    background: #E4E3DC;
    border-radius: 40px;
    overflow: hidden;
    padding: 5px!important;
    box-shadow: 0 0 5px #000;
}
.videoSearch .customView{
    border-radius: 40px!important;
    padding: 2px!important;
    background: #fff;
}
.videoSearch .customView:before, 
.videoSearch .customView:after{
    content:"";
    display:block;
    height:0;
    overflow:hidden;    
    clear:both;
}
.videoSearch .customView .item.search_btn{
    padding: 4px 4px 4px 0!important;
    height: 60px;
    overflow: hidden;
}
.videoSearch .customView .item.search_btn .resortpro-search-submit-button-block{
    background: var(--main_color);
    border-top-right-radius: 30px;
    border-bottom-right-radius: 30px;
    position: relative;
    transition: 0.3s;
    cursor: pointer;
}
.videoSearch .customView .item.search_btn .resortpro-search-submit-button-block:hover{
    background: var(--hover_color);
}
.videoSearch .customView .item.search_btn .resortpro-search-submit-button-block:after{
    content: 'GO';
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center; 
    top: 0;
    left: 0;
    color: #fff;
    font-weight: 700;
    position: absolute;
    letter-spacing: 2px;
    font-size: 22px;    
}
.videoSearch .customView .item.search_btn button{
    opacity: 0;
    position: relative;
    z-index: 9;
}
.videoSearch .customView .item.search_btn button,
.videoSearch .customView .item.search_btn .resortpro-search-submit-button-block{
    height: 100%!important;
}

/*Responsivness*//*Responsivness*//*Responsivness*/
@media(max-width:991px){
.videoSearch .item{
    width: 100%!important;
    float: none!important
}
.videoSearch form#resortpro-widget-form{
    padding: 0!important;
    box-shadow: none!important;
    border-radius: 0!important;
    max-width: 90%;
    margin: 0 auto;
}
.videoSearch #resortpro-widget-form input,
.videoSearch #resortpro-widget-form select{
    border-right: none!important;
}
.videoSearch .customView{
    border-radius: 0!important;
    padding: 0!important;
    margin: 0!important;
}
.videoSearch .customView .item.search_btn{
    padding: 0!important;
    border: none!important;
}
.videoSearch .item:not(:first-child){
    border-top: 2px solid #ccc!important;
}
.videoSearch .resortpro-search-submit-button-block{
    width: 100%;
    border-radius: 0!important;
}
}
</style>












