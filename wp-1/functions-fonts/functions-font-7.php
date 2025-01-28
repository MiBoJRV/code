<?php
wp_nonce_field( plugin_basename(__FILE__), 'gfonts_custom_noncename_7' );
echo '<div class="titleFont">Paragraph Font</div>';
echo '<div id="select1_7"></div>';
echo '<div class="hideItem" id="select2_7"></div>';
echo '<input type="text" id= "gfonts_url_field_7" name="gfonts_url_field_7" value="'.get_post_meta( $post->ID, "_gfonts_url_value_key_7")[0].'" size="25" style="width:100%;" placeholder="Font Url"/>';
echo '<input type="text" id= "gfonts_size_field_7" name="gfonts_size_field_7" value="'.get_post_meta( $post->ID, "_gfonts_size_value_key_7")[0].'" size="25" style="width:100%;" placeholder="Font Size"/>';
echo '<input style="display: none" type="text" id= "gfonts_weight_field_7" name="gfonts_weight_field_7" value="'.get_post_meta( $post->ID, "_gfonts_weight_value_key_7")[0].'" size="25" style="width:100%;" placeholder="Font Weight"/>';
echo '<input style="display: none" type="text" id= "gfonts_name_field_7" name="gfonts_name_field_7" value="'.get_post_meta( $post->ID, "_gfonts_name_value_key_7")[0].'" size="25" style="width:100%;" placeholder="Font Name"/>';
echo '<input style="display: none" type="text" id= "gfonts_type_field_7" name="gfonts_type_field_7" value="'.get_post_meta( $post->ID, "_gfonts_type_value_key_7")[0].'" size="25" style="width:100%;" placeholder="Font Type"/>';
echo '
    <script>
        jQuery.getJSON( "https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyBYqkZvzg5yRkcuf0TfIwKxqvQ-hh1GTcw", function( data ) {
            var items = [];
            //alert(JSON.stringify(data, null, 4))
            items.push("<option>Change font </option>");
            jQuery.each( data.items, function( key, val ) {
                if(jQuery("#gfonts_name_field_7").val() == val.family){
                    items.push( "<option value=\'" + val.family + "\' selected>" + val.family + "</option>" );
                    selectFontType_7(val.family, false);
                }else{
                    items.push( "<option value=\'" + val.family + "\'>" + val.family + "</option>" );
                }

            });

            jQuery( "<select/>", {
                "class": "my-new-list_7",
                html: items.join( "" )
            }).appendTo( "#select1_7" );
        });

        jQuery(\'body\').on(\'change\', \'.my-new-list_7\', function () {
            selectFontType_7(this.value, true);
        });

        function selectFontType_7(item, update_name){
            jQuery(\'#select2_7\').empty();
            var selectedItem = item;
            var mainFontForUrl = selectedItem.replace(" ", "+").replace(" ", "+").replace(" ", "+");

            jQuery.getJSON( "https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyBYqkZvzg5yRkcuf0TfIwKxqvQ-hh1GTcw", function( data ) {
                var items = [];
                items.push(\'<option value="400">Please select variants</option>\');
                jQuery.each( data.items, function( key, val ) {
                    if(selectedItem == val.family){
                        jQuery.each( val.variants, function( key, val ) {
                            var allFontVar = jQuery("#gfonts_weight_field_7").val()+jQuery("#gfonts_type_field_7").val();
                            if( allFontVar == "400" ){
                                allFontVar = "regular";
                            }else if( allFontVar.includes(400) ){
                                allFontVar = allFontVar.substr(3);
                            }
                            if(allFontVar == val){
                                items.push("<option value=\'" + val + "\' selected>" + val + "</option>");
                            }else{
                                items.push("<option value=\'" + val + "\'>" + val + "</option>");
                            }
                        });
                    }
                });

                jQuery( "<select/>", {
                    "class": "my-new-list-2_7",
                    html: items.join( "" )
                }).appendTo( "#select2_7" );
                if(update_name){
                    jQuery("#gfonts_url_field_7").val(mainFontForUrl);
                }
                jQuery("#gfonts_name_field_7").val(selectedItem);
            });
        }

        jQuery(\'body\').on(\'change\', \'.my-new-list-2_7\', function () {
            var selectedMainFont = jQuery("select.my-new-list_7 option:selected").text();
            var mainFontForUrl = selectedMainFont.replace(" ", "+").replace(" ", "+").replace(" ", "+");
            var selectedItem = this.value;
            if(selectedItem=="regular"){
                selectedItem = "";
                jQuery("#gfonts_weight_field_7").val("400");
                jQuery("#gfonts_type_field_7").val("");
            }else{
                if(selectedItem.includes("italic")){
                    jQuery("#gfonts_type_field_7").val("italic");
                    if(selectedItem.includes("00")){
                        jQuery("#gfonts_weight_field_7").val(selectedItem.substring(0,3));
                        selectedItem = ":"+selectedItem.substring(0,3)+"i";
                    }else{
                        selectedItem = ":400i";
                        jQuery("#gfonts_weight_field_7").val(400);
                    }

                }else{
                    jQuery("#gfonts_weight_field_7").val(selectedItem);
                    jQuery("#gfonts_type_field_7").val("");
                    selectedItem = ":"+selectedItem;
                }
            }

            jQuery.getJSON( "https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyBYqkZvzg5yRkcuf0TfIwKxqvQ-hh1GTcw", function( data ) {
                var items = [];
                items.push(\'<option>Please select variants</option>\');
                jQuery.each( data.items, function( key, val ) {
                    if(selectedMainFont == val.family){
                        var gfonturl = mainFontForUrl+selectedItem;
                        //var gfonturl = \'<link href="https://fonts.googleapis.com/css?family=\'+mainFontForUrl+selectedItem+\'" rel="stylesheet">\';
                        jQuery("#gfonts_url_field_7").val(gfonturl);
                    }
                });
            });
        });
    </script>
';