<?php   
// inspired by inanzzz
    function strigToBinary($string)
    {
        $char = str_split($string);

        $biner = [];
        foreach ($char as $character) {
            $data = unpack('H*', $character);
            $biner[] = base_convert($data[1], 16, 2);
        }

        return implode(' ', $biner);    
    }

    function binaryToString($biner)
    {
        $binari = explode(' ', $biner);

        $string = null;
        foreach ($binari as $biner) {
            $string .= pack('H*', dechex(bindec($biner)));
        }

        return $string;    
    }

    $string = readline("Masukkan Kata : ");
    echo 'STRING: '.$string.PHP_EOL;
    echo 'BINER: '.$biner = strigToBinary($string).PHP_EOL;
    echo 'STRING: '.binaryToString($biner).PHP_EOL;
?>
