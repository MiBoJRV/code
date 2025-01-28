<form  class="searchPost" name="searchPost" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
    <input class="col-xs-10" type="text" placeholder="SEARCH..." value="<?php echo get_search_query() ?>" name="s" id="s" />
    <input class="col-xs-2" type="submit" id="searchsubmit" name="submit" value=""/>
</form>