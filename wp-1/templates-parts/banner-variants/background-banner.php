<style>
/*Background Banner*/
.videoSearch .container-custom {
    max-width: 1211px;
}
.videoSearch .search_widget {
    padding: 5px;
    clear: both;
    background: rgba(255, 255, 255, 0.25);
    position: relative;
}
#slider #resortpro-widget-form input, #slider #resortpro-widget-form select {
    color: gray;
}
.videoSearch .form-group {
    width: auto;
    margin-bottom: 0;
    padding: 5px;
}
.videoSearch h1 .sub_title {
    display: block;
}
.videoSearch #resortpro-widget-form .item {
    width: 20%;
}
.videoSearch #resortpro-widget-form .item.guests {
    display: none;
}
.videoSearch #resortpro-widget-form .item.all_rentals,
.videoSearch #resortpro-widget-form .item.amenities-wrap{
    display: none;
}
.border_line {
	display: none;
}
#slider #resortpro-widget-form > div.row .customView {
	display: flex;
	flex-wrap: wrap;
}


/*Responsivness*//*Responsivness*//*Responsivness*/
@media(max-width: 1199px) {
.videoSearch #resortpro-widget-form .item {
	width: calc(100% / 5);
}
/*.videoSearch #resortpro-widget-form .item.amenities-wrap,
.videoSearch #resortpro-widget-form .item.search_btn {
	width: 50%;
}*/
}
@media(max-width: 991px){
.videoSearch #resortpro-widget-form .item {
	width: calc(100% / 2);
}	
.videoSearch #resortpro-widget-form .item.search_btn {
	width: 100%;
}	
}
@media(max-width: 767px) {
.videoSearch #resortpro-widget-form .item.amenities-wrap,
.videoSearch #resortpro-widget-form .item.search_btn,
.videoSearch #resortpro-widget-form .item {
	width: 100%;
}
}
</style>