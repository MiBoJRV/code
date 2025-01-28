<?php get_header();?>
<style>
    .list-table h1{
        text-align: center;
        padding-bottom: 30px;
        padding-top: 30px;
    }
    .list-table table{
        width:100%;
        margin-bottom: 50px;
    }
    .list-table table thead{
        background:#102b42;
        color:#fff;
    }
    .list-table table th,
    .list-table table td{
        padding: 15px 5px 15px 15px;
    }
    .list-table table tbody tr{
        border-bottom:1px solid #DDDDDD;
    }
    .list-table table tbody tr:nth-child(odd){
        background:#F9F9F9;
    }
    table th:not(:first-child),
    table td:not(:first-child){
        text-align: center;
    }
</style>

<section class="list-table">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <table>
            <thead>
            <tr>
                <th>Unit Name</th>
                <th>Bedrooms</th>
                <th>Occupancy</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $option_arr_settings = StreamlineCore_Settings::get_options();
            $company_code = StreamlineCore_Settings::get_options( 'id' );

            $url = 'https://web.streamlinevrs.com/api/json';

            //JSON data(not exact, but will be compiled to JSON) file:
            //add as many data as you need (according to prosperworks doc):
            $data = array(
                'methodName' => 'GetPropertyListWordPress',
                'params' => array(
                    'use_description' => 'no',
                    'use_amenities' => 'no'
                )
            );

            if (empty($company_code)) {
                $data['params']['token_key'] = StreamlineCore_Settings::get_options( 'token_key' );
                $data['params']['token_secret'] = StreamlineCore_Settings::get_options( 'token_secret' );
            }else{
                $data['params']['company_code'] = $company_code;
            }

            if( isset($option_arr_settings['filter_location_areas']) ){
                $keys = array_keys($option_arr_settings['filter_location_areas']);
                $data['params']['location_areas_id_filter'] = implode(",",$keys);
            }

            //sending request (according to prosperworks documentation):
            // use key 'http' even if you send the request to https://...
            $options = array(
                'http' => array(
                    'header'  => "Content-Type: application/json",
                    'method'  => 'POST',
                    'content' => json_encode($data),
                    'timeout' => 1200,
                )
            );

            //engine:
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);

            $result_array = json_decode($result, true);

            $prepend_property_page_test = StreamlineCore_Settings::get_options('prepend_property_page');

            global $wpdb;
            $end_url = $wpdb->get_var( "SELECT option_value FROM $wpdb->options WHERE option_name = 'end_url_units_abc'" );

            if( $prepend_property_page_test ){
                $site_start_url = site_url().'/'.$prepend_property_page_test.'/';
            }else{
                $site_start_url = site_url().'/';
            }

            foreach ($result_array['data']['property'] as $key => $result_one) :
            ?>
                <tr>
                    <td><a href="<?=$site_start_url.$result_one['seo_page_name'].$end_url?>"><?=$result_one['name']?></a></td>
                    <td><?=$result_one['bedrooms_number']?></td>
                    <td><?=$result_one['max_occupants']?></td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</section><!-- end list-table -->

<?php get_footer();?>