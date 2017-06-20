<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Linhas de validação da lingua
    |--------------------------------------------------------------------------
    |
    | 
    |
    */

    'accepted'             => 'O :attribute deve ser aceito.',
    'active_url'           => 'O :attribute não é uma URL válida.',
    'after'                => 'O :attribute deve ser uma data posterior :data.',
    'alpha'                => 'O :attribute pode conter apenas letras.',
    'alpha_dash'           => 'O :attribute pode conter apenas letras, numeros, and traços.',
    'alpha_num'            => 'O :attribute pode conter apenas letras and numeros.',
    'array'                => 'O :attribute deve ser um array.',
    'before'               => 'O :attribute deve ser uma data anterior :data.',
    'between'              => [
        'numeric' => 'O :attribute deve estar entre :min and :max.',
        'file'    => 'O :attribute deve estar entre  :min and :max kilobytes.',
        'string'  => 'O :attribute deve estar entre  :min and :max characters.',
        'array'   => 'O :attribute deve estar entre  :min and :max items.',
    ],
    'boolean'              => 'O :attribute campo deve ser true or false.',
    'confirmed'            => 'O :attribute não corresponde a confirmação.',
    'date'                 => 'O :attribute não é uma data valida.',
    'date_format'          => 'O :attribute não corresponde ao formato :format.',
    'different'            => 'O :attribute e :outro deve ser diferente.',
    'digits'               => 'O :attribute deve conter :digitos digitos.',
    'digits_between'       => 'O :attribute deve estar entre :min and :max digits.',
    'distinct'             => 'O :attribute campo tem um valor duplicado.',
    'email'                => 'O :attribute deve ser um endereço de e-mail válido',
    'exists'               => 'O attribute :selecionado é invalido.',
    'filled'               => 'O :attribute campo é requerido.',
    'image'                => 'O :attribute deve ser uma imagem',
    'in'                   => 'O attribute :selecionado é invalido.',
    'in_array'             => 'O :attribute campo não existe em :outro.',
    'integer'              => 'O :attribute deve ser um inteiro.',
    'ip'                   => 'O :attribute deve ser um endereço IP.',
    'json'                 => 'O :attribute deve ser um JSON string válido.',
    'max'                  => [
        'numeric' => 'O :attribute não pode ser maior que :max.',
        'file'    => 'O :attribute não pode ser maior que :max kilobytes.',
        'string'  => 'O :attribute não pode ser maior que :max characters.',
        'array'   => 'O :attribute não pode ser maior que :max items.',
    ],
    'mimes'                => 'O :attribute deve ser um arquivo do tipo: :valor.',
    'min'                  => [
        'numeric' => 'O :attribute deve ser pelo menos :min.',
        'file'    => 'O :attribute deve ser pelo menos :min kilobytes.',
        'string'  => 'O :attribute deve ser pelo menos :min characters.',
        'array'   => 'O :attribute deve ser pelo menos :min items.',
    ],
    'not_in'               => 'O attribute :selecionado é invalido.',
    'numeric'              => 'O :attribute deve ser um numero.',
    'present'              => 'O :attribute campo deve estar presente.',
    'regex'                => 'O :attribute formato é invalido.',
    'required'             => 'O :attribute campo é requerido',
    'required_if'          => 'O :attribute campo é requerido enquanto :outro é :valor.',
    'required_unless'      => 'O :attribute campo é requerido unless :other is in :values.',
    'required_with'        => 'O :attribute campo é requerido enquanto :valor está presente.',
    'required_with_all'    => 'O :attribute campo é requerido enquanto :valor está presente.',
    'required_without'     => 'O :attribute campo é requerido enquanto :valor não está  presente.',
    'required_without_all' => 'O :attribute campo é requerido enquanto nenhum dos :valores estão presentes.',
    'same'                 => 'O :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'O :attribute deve ser :size.',
        'file'    => 'O :attribute deve ser :size kilobytes.',
        'string'  => 'O :attribute deve ser :size characters.',
        'array'   => 'O :attribute deve conter :size items.',
    ],
    'string'               => 'O :attribute deve ser uma string.',
    'timezone'             => 'O :attribute deve ser uma zona valida.',
    'unique'               => 'O :attribute já foi tomado.',
    'url'                  => 'O :attribute com este formato é invalido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
