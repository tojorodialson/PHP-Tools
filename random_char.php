function randomChar($value){
    $length = $value; //length of char
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charMax = strlen($chars);
    $charRandom = '';
    for ($i = 0; $i < $length; $i++) {
        $charRandom .= $chars[rand(0, $charMax -1)];
    }
    return $charRandom;
}
