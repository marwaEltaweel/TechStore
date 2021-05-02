<?php

namespace TechStore\Classes\Validation;

class Validator
{

    private $errors=[];//علشان ميحصلش اي تعامل مباشر مع الارراي ده غير مع كلاس الفاليدات وبعدين نعمله ريتارن مع كلاس جيت ايرور

    public function validate(string $name, $value, array $rules)
    {
        foreach ($rules as $rule) {

            $obj = new $rule;
            // if($rule == "required")
            // {
            //     $obj = new Required;
            // }elseif($rule == "numeric")
            // {
            //     $obj = new Numeric;
            // }elseif($rule == "max")
            // {
            //     $obj = new Max;
            // }elseif($rule == "email")
            // {
            //     $obj = new Email;
            // }

            $error = $obj->check($name, $value);
            if($error !== false)
            {
                $errors[]=$error;
                break;
            }
        }
    }

    public function getErrors() : array
    {
        return $this->errors;
    }
    
    public function hasError() : bool
    {
        return ! empty($this->errors);
    }

}
?>