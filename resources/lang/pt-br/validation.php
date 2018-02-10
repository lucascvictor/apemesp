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

    'accepted'             => 'O campo deve ser aceito.',
    'active_url'           => 'O campo não é uma URL válida.',
    'after'                => 'O campo deve ser uma data posterior :data.',
    'alpha'                => 'O campo pode conter apenas letras.',
    'alpha_dash'           => 'O campo pode conter apenas letras, numeros, and traços.',
    'alpha_num'            => 'O campo pode conter apenas letras and numeros.',
    'array'                => 'O campo deve ser um array.',
    'before'               => 'O campo deve ser uma data anterior :data.',
    'between'              => [
        'numeric' => 'O campo deve estar entre :min and :max.',
        'file'    => 'O campo deve estar entre  :min and :max kilobytes.',
        'string'  => 'O campo deve estar entre  :min and :max characters.',
        'array'   => 'O campo deve estar entre  :min and :max items.',
    ],
    'boolean'              => 'O campo  deve ser true or false.',
    'confirmed'            => 'O campo não corresponde a confirmação.',
    'date'                 => 'O campo não é uma data valida.',
    'date_format'          => 'O campo não corresponde ao formato :format.',
    'different'            => 'O campo e :outro deve ser diferente.',
    'digits'               => 'O campo deve conter :digitos digitos.',
    'digits_between'       => 'O campo deve estar entre :min and :max digits.',
    'distinct'             => 'O campo  tem um valor duplicado.',
    'email'                => 'O campo deve ser um endereço de e-mail válido',
    'exists'               => 'O atributo :selecionado é invalido.',
    'filled'               => 'O campo  é requerido.',
    'image'                => 'O campo deve ser uma imagem',
    'in'                   => 'O atributo :selecionado é invalido.',
    'in_array'             => 'O campo  não existe em :outro.',
    'integer'              => 'O campo deve ser um inteiro.',
    'ip'                   => 'O campo deve ser um endereço IP.',
    'json'                 => 'O campo deve ser um JSON string válido.',
    'max'                  => [
        'numeric' => 'O campo não pode ser maior que :max.',
        'file'    => 'O campo não pode ser maior que :max kilobytes.',
        'string'  => 'O campo não pode ser maior que :max characters.',
        'array'   => 'O campo não pode ser maior que :max items.',
    ],
    'mimes'                => 'O campo deve ser um arquivo do tipo: :valor.',
    'min'                  => [
        'numeric' => 'O campo deve ser pelo menos :min.',
        'file'    => 'O campo deve ser pelo menos :min kilobytes.',
        'string'  => 'O campo deve ser pelo menos :min characters.',
        'array'   => 'O campo deve ser pelo menos :min items.',
    ],
    'not_in'               => 'O atributo :selecionado é invalido.',
    'numeric'              => 'O campo deve ser um numero.',
    'present'              => 'O campo  deve estar presente.',
    'regex'                => 'O campo formato é invalido.',
    'required'             => 'O campo  é requerido',
    'required_if'          => 'O campo  é requerido enquanto :outro é :valor.',
    'required_unless'      => 'O campo  é requerido unless :other is in :values.',
    'required_with'        => 'O campo  é requerido enquanto :valor está presente.',
    'required_with_all'    => 'O campo  é requerido enquanto :valor está presente.',
    'required_without'     => 'O campo  é requerido enquanto :valor não está  presente.',
    'required_without_all' => 'O campo  é requerido enquanto nenhum dos :valores estão presentes.',
    'same'                 => 'O campo and :other must match.',
    'size'                 => [
        'numeric' => 'O campo deve ser :size.',
        'file'    => 'O campo deve ser :size kilobytes.',
        'string'  => 'O campo deve ser :size characters.',
        'array'   => 'O campo deve conter :size items.',
    ],
    'string'               => 'O campo deve ser uma string.',
    'timezone'             => 'O campo deve ser uma zona valida.',
    'unique'               => 'O campo já foi tomado.',
    'url'                  => 'O campo com este formato é invalido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for atributos using the
    | convention "atributo.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given atributo rule.
    |
    */

    'custom' => [
        'atributo-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation atributos
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap atributo place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'atributos' => [],

];
