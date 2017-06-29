$biodata = array(
    array(
        "name" => "name1",
        "age" => "23"
    ),
    array(
        "name" => "name2",
        "age" => "24"
    ),
    array(
        "name" => "name3",
        "age" => "28"
    ),
    array(
        "name" => "name4",
        "age" => "28"
    ),
)

$func = function($value) {
    return array($value['name'] =>$value[age] );
};

$array_key_value_pair = array_map($func, $biodata);
print_r($array_key_value_pair);
