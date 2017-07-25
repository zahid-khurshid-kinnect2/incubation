<?php
use App\User;
use Illuminate\Support\Facades\DB;

function limit_char($name, $limit = 15) {
    return \Illuminate\Support\Str::limit($name, $limit);
}

function country_name($id) {
    if(is_null($id) || $id == 0) {
        return 'N/A';
    }

    $country = DB::table('countries')->select('name')->where('id', $id)->first();

    return $country->name;
}


function getImage($imagePath, $type = NULL) {

    if(empty($imagePath) || is_null($imagePath)) {
        return asset('local/public/assets/images/default-user-image.jpg');
    } else {
        if(!is_null($type)) {
            return url('local/storage/app/public/images/' . $imagePath);
        }
        return url('local/storage/app/public/images/' . $imagePath);
    }
}

function getUserType($user_id, $returnType = 1) {
    $user = User::find($user_id);

    $user_type = 'user';

    if(isset($user->id)) {
        if($user->user_type == 1) {
            $user_type = 'user';
        }

        if($user->user_type == 2) {
            $user_type = 'Delivery Man';
        }

        if($user->user_type == 3) {
            $user_type = 'user';
        }

        if($returnType == 1) {
            return $user->user_type;
        }

        return $user_type;
    }

    return '';
}

function slugify($str, $options = array()) {
    // Make sure string is in UTF-8 and strip invalid UTF-8 characters
    $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());

    $defaults = array(
        'delimiter'     => '-',
        'limit'         => NULL,
        'lowercase'     => TRUE,
        'replacements'  => array(),
        'transliterate' => FALSE,
    );

    // Merge options
    $options = array_merge($defaults, $options);

    $char_map = array(
        // Latin
        '�' => 'A', '�' => 'A', '�' => 'A', '�' => 'A', '�' => 'A', '�' => 'A', '�' => 'AE', '�' => 'C',
        '�' => 'E', '�' => 'E', '�' => 'E', '�' => 'E', '�' => 'I', '�' => 'I', '�' => 'I', '�' => 'I',
        '�' => 'D', '�' => 'N', '�' => 'O', '�' => 'O', '�' => 'O', '�' => 'O', '�' => 'O', '?' => 'O',
        '�' => 'O', '�' => 'U', '�' => 'U', '�' => 'U', '�' => 'U', '?' => 'U', '�' => 'Y', '�' => 'TH',
        '�' => 'ss',
        '�' => 'a', '�' => 'a', '�' => 'a', '�' => 'a', '�' => 'a', '�' => 'a', '�' => 'ae', '�' => 'c',
        '�' => 'e', '�' => 'e', '�' => 'e', '�' => 'e', '�' => 'i', '�' => 'i', '�' => 'i', '�' => 'i',
        '�' => 'd', '�' => 'n', '�' => 'o', '�' => 'o', '�' => 'o', '�' => 'o', '�' => 'o', '?' => 'o',
        '�' => 'o', '�' => 'u', '�' => 'u', '�' => 'u', '�' => 'u', '?' => 'u', '�' => 'y', '�' => 'th',
        '�' => 'y',
        // Latin symbols
        '�' => '(c)',
        // Greek
        '?' => 'A', '?' => 'B', '?' => 'G', '?' => 'D', '?' => 'E', '?' => 'Z', '?' => 'H', '?' => '8',
        '?' => 'I', '?' => 'K', '?' => 'L', '?' => 'M', '?' => 'N', '?' => '3', '?' => 'O', '?' => 'P',
        '?' => 'R', '?' => 'S', '?' => 'T', '?' => 'Y', '?' => 'F', '?' => 'X', '?' => 'PS', '?' => 'W',
        '?' => 'A', '?' => 'E', '?' => 'I', '?' => 'O', '?' => 'Y', '?' => 'H', '?' => 'W', '?' => 'I',
        '?' => 'Y',
        '?' => 'a', '?' => 'b', '?' => 'g', '?' => 'd', '?' => 'e', '?' => 'z', '?' => 'h', '?' => '8',
        '?' => 'i', '?' => 'k', '?' => 'l', '?' => 'm', '?' => 'n', '?' => '3', '?' => 'o', '?' => 'p',
        '?' => 'r', '?' => 's', '?' => 't', '?' => 'y', '?' => 'f', '?' => 'x', '?' => 'ps', '?' => 'w',
        '?' => 'a', '?' => 'e', '?' => 'i', '?' => 'o', '?' => 'y', '?' => 'h', '?' => 'w', '?' => 's',
        '?' => 'i', '?' => 'y', '?' => 'y', '?' => 'i',
        // Turkish
        '?' => 'S', '?' => 'I', '�' => 'C', '�' => 'U', '�' => 'O', '?' => 'G',
        '?' => 's', '?' => 'i', '�' => 'c', '�' => 'u', '�' => 'o', '?' => 'g',
        // Russian
        '?' => 'A', '?' => 'B', '?' => 'V', '?' => 'G', '?' => 'D', '?' => 'E', '?' => 'Yo', '?' => 'Zh',
        '?' => 'Z', '?' => 'I', '?' => 'J', '?' => 'K', '?' => 'L', '?' => 'M', '?' => 'N', '?' => 'O',
        '?' => 'P', '?' => 'R', '?' => 'S', '?' => 'T', '?' => 'U', '?' => 'F', '?' => 'H', '?' => 'C',
        '?' => 'Ch', '?' => 'Sh', '?' => 'Sh', '?' => '', '?' => 'Y', '?' => '', '?' => 'E', '?' => 'Yu',
        '?' => 'Ya',
        '?' => 'a', '?' => 'b', '?' => 'v', '?' => 'g', '?' => 'd', '?' => 'e', '?' => 'yo', '?' => 'zh',
        '?' => 'z', '?' => 'i', '?' => 'j', '?' => 'k', '?' => 'l', '?' => 'm', '?' => 'n', '?' => 'o',
        '?' => 'p', '?' => 'r', '?' => 's', '?' => 't', '?' => 'u', '?' => 'f', '?' => 'h', '?' => 'c',
        '?' => 'ch', '?' => 'sh', '?' => 'sh', '?' => '', '?' => 'y', '?' => '', '?' => 'e', '?' => 'yu',
        '?' => 'ya',
        // Ukrainian
        '?' => 'Ye', '?' => 'I', '?' => 'Yi', '?' => 'G',
        '?' => 'ye', '?' => 'i', '?' => 'yi', '?' => 'g',
        // Czech
        '?' => 'C', '?' => 'D', '?' => 'E', '?' => 'N', '?' => 'R', '�' => 'S', '?' => 'T', '?' => 'U',
        '�' => 'Z',
        '?' => 'c', '?' => 'd', '?' => 'e', '?' => 'n', '?' => 'r', '�' => 's', '?' => 't', '?' => 'u',
        '�' => 'z',
        // Polish
        '?' => 'A', '?' => 'C', '?' => 'e', '?' => 'L', '?' => 'N', '�' => 'o', '?' => 'S', '?' => 'Z',
        '?' => 'Z',
        '?' => 'a', '?' => 'c', '?' => 'e', '?' => 'l', '?' => 'n', '�' => 'o', '?' => 's', '?' => 'z',
        '?' => 'z',
        // Latvian
        '?' => 'A', '?' => 'C', '?' => 'E', '?' => 'G', '?' => 'i', '?' => 'k', '?' => 'L', '?' => 'N',
        '�' => 'S', '?' => 'u', '�' => 'Z',
        '?' => 'a', '?' => 'c', '?' => 'e', '?' => 'g', '?' => 'i', '?' => 'k', '?' => 'l', '?' => 'n',
        '�' => 's', '?' => 'u', '�' => 'z',
    );

    // Make custom replacements
    $str = preg_replace(array_keys($options[ 'replacements' ]), $options[ 'replacements' ], $str);

    // Transliterate characters to ASCII
    if($options[ 'transliterate' ]) {
        $str = str_replace(array_keys($char_map), $char_map, $str);
    }

    // Replace non-alphanumeric characters with our delimiter
    $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options[ 'delimiter' ], $str);

    // Remove duplicate delimiters
    $str = preg_replace('/(' . preg_quote($options[ 'delimiter' ], '/') . '){2,}/', '$1', $str);

    // Truncate slug to max. characters
    $str = mb_substr($str, 0, ($options[ 'limit' ] ? $options[ 'limit' ] : mb_strlen($str, 'UTF-8')), 'UTF-8');

    // Remove delimiter from ends
    $str = trim($str, $options[ 'delimiter' ]);

    $slug = $options[ 'lowercase' ] ? mb_strtolower($str, 'UTF-8') : $str;

    $result = DB::table($options[ 'table' ])
                ->where($options[ 'field' ], 'like', $slug . '%')
                ->get();

    // echo '<tt><pre>'; print_r($result); die;
    //dd(DB::getQueryLog());
    if(count($result)) {

        $slugs = array();
        $i     = 0;
        foreach ($result as $row) {
            $slugs[ $i ] = $options[ 'lowercase' ] ? mb_strtolower($row->$options[ 'field' ], 'UTF-8') : $row->$options[ 'field' ];
            $i++;
        }

        if(in_array($slug, $slugs)) {

            $max = 0;

            //keep incrementing $max until a space is found
            while (in_array(($slug . '-' . ++$max), $slugs))
                ;

            //update $slug with the appendage
            $slug .= '-' . $max;
        }

        return $slug;
    } else {
        return $slug;
    }
    function getUserNameById($user_id) {
        $user_id = User::where('id', $user_id)->first();
        return $user_id;
    }

}

function getCategoryName($id) {
    $category = \App\Category::find($id);
    if(!empty($category)) {
        return $category->name;
    } else {
        return 'N/A';
    }

}


