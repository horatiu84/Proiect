<?php 

function dd($text) {
    echo '<pre>';
    print_r($text);
    echo '</pre>';
    exit;
}

function invalidInputClass($errors, $input_name) {
    return isset($errors[$input_name]) && count($errors[$input_name]) ? 'is-invalid' : '';
}

function old($input_name) {
    return (isset($_POST[$input_name]) && $_POST[$input_name]) ? $_POST[$input_name] : '';
}

function getErrors($errors, $input_name) {
    if(isset($errors[$input_name]) && count($errors[$input_name])) {
         $output = '';
        foreach($errors[$input_name] as $error) {
            $output .= '<div class="invalid-feedback">'.$error.'</div>';
        }
        return $output;
    
    } 
    return null;
    
}

function validate($data, $rules) {
    $errors = [];

    foreach($rules as $input => $input_rules) {
        $input_rules = explode('|',$input_rules);
        foreach($input_rules as $rule) {
            $split = explode(':', $rule);

            switch($split[0]) {
                case 'required':
                    if((!isset($data[$input]) || !$data[$input]) || 
                    (is_array($data[$input]) && isset($data[$input]['size']) && !$data[$input]['size']) ) {
                        $errors[$input][] = beautifyInputName($input).' is required';
                    }
                    break;
                    case 'match':
                        if(!isset($data[$input]) || !isset($data[$split[1]]) || $data[$input] !== $data[$split[1]] )
                         {
                            $errors[$input][] = beautifyInputName($input).' and ' . beautifyInputName($split[1]) . ' must match';
                        }
                        break;
                    case 'min' :
                        if(!isset($data[$input]) || $data[$input] && strlen($data[$input])< $split[1] ) {
                            $errors[$input][] = beautifyInputName($input).' is too short. Required at least '.$split[1].' characters!';
                        }
                        break;
                        case 'max' :
                            if(!isset($data[$input]) || $data[$input] && strlen($data[$input])> $split[1] ) {
                                $errors[$input][] = beautifyInputName($input).' is too long. Maximum is '.$split[1].' characters allowed!';
                            }
                            break;

            }
        }
    }

    return $errors;
}

function beautifyInputName($input) {
    return ucfirst(str_replace('_',' ', $input));
}