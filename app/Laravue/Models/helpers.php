<?php

function ellipsis($str,$length)
{
    if(mb_strlen($str,'utf8') != mb_strwidth($str,'utf8') && mb_strwidth($str) > $length)
    $result = mb_substr($str,0,$length);
    elseif(mb_strwidth($str) > $length*2)
    $result = mb_substr($str,0,$length*2);
    else
    $result = $str;
    if($str != $result)
    $result .= '...';
    return $result;
}
function set_locale($locale)
{
    if (array_key_exists($locale,locales())) {
        Session::put('applocale', $locale);
    }
    if (Session::has('applocale') && in_array(Session::get('applocale'), pagelocales())) {
        App::setLocale(Session::get('applocale'));
    }
    else {
        App::setLocale("ja");
    }
}
function get_locale()
{
    return Session::get('applocale');
}
function t($ja,$locale='ja')
{
    return __($ja);
}
function mailStatus($key = null)
{
    $datas= ["予約","配信中","配信済み","キャンセル"];
    return isset($key) ? $datas[$key] : $datas;
}
//指定した文字列のハッシュを返す URLのvalidateに使用
function qhash($q,$length=8)
{
    return substr(md5("df1maoru2nnc03z".$q),0,$length);
}
