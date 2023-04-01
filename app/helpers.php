<?php
if(!function_exists('digits_persian')) {
    function digits_persian($string)
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $num = range(0, 9);
        $string = str_replace( $num, $persian, $string );

        return $string;
    }
}

if(! function_exists('isActive') ) {
    function isActive($key , $activeClassName = 'active') {
        if(is_array($key)) {
            return in_array(Route::currentRouteName() , $key) ? $activeClassName : '';
        }

        return Route::currentRouteName() == $key ? $activeClassName :  '';
    }
}


