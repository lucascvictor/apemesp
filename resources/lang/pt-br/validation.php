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

    'accepted'             => 'O :atributo deve ser aceito.',
    'active_url'           => 'O :atributo não é uma URL válida.',
    'after'                => 'O :atributo deve ser uma data posterior :data.',
    'alpha'                => 'O :atributo pode conter apenas letras.',
    'alpha_dash'           => 'O :atributo pode conter apenas letras, numeros, and traços.',
    'alpha_num'            => 'O :atributo pode conter apenas letras and numeros.',
    'array'                => 'O :atributo deve ser um array.',
    'before'               => 'O :atributo deve ser uma data anterior :data.',
    'between'              => [
        'numeric' => 'O :atributo deve estar entre :min and :max.',
        'file'    => 'O :atributo deve estar entre  :min and :max kilobytes.',
        'string'  => 'O :atributo deve estar entre  :min and :max characters.',
        'array'   => 'O :atributo deve estar entre  :min and :max items.',
    ],
    'boolean'              => 'O :atributo campo deve ser true or false.',
    'confirmed'            => 'O :atributo não corresponde a confirmação.',
    'date'                 => 'O :atributo não é uma data valida.',
    'date_format'          => 'O :atributo não corresponde ao formato :format.',
    'different'            => 'O :atributo e :outro deve ser diferente.',
    'digits'               => 'O :atributo deve conter :digitos digitos.',
    'digits_between'       => 'O :atributo deve estar entre :min and :max digits.',
    'distinct'             => 'O :atributo campo tem um valor duplicado.',
    'email'                => 'O :atributo deve ser um endereço de e-mail válido',
    'exists'               => 'O atributo :selecionado é invalido.',
    'filled'               => 'O :atributo campo é requerido.',
    'image'                => 'O :atributo deve ser uma imagem',
    'in'                   => 'O atributo :selecionado é invalido.',
    'in_array'             => 'O :atributo campo não existe em :outro.',
    'integer'              => 'O :atributo deve ser um inteiro.',
    'ip'                   => 'O :atributo deve ser um endereço IP.',
    'json'                 => 'O :atributo deve ser um JSON string válido.',
    'max'                  => [
        'numeric' => 'O :atributo não pode ser maior que :max.',
        'file'    => 'O :atributo não pode ser maior que :max kilobytes.',
        'string'  => 'O :atributo não pode ser maior que :max characters.',
        'array'   => 'O :atributo não pode ser maior que :max items.',
    ],
    'mimes'                => 'O :atributo deve ser um arquivo do tipo: :valor.',
    'min'                  => [
        'numeric' => 'O :atributo deve ser pelo menos :min.',
        'file'    => 'O :atributo deve ser pelo menos :min kilobytes.',
        'string'  => 'O :atributo deve ser pelo menos :min characters.',
        'array'   => 'O :atributo deve ser pelo menos :min items.',
    ],
    'not_in'               => 'O atributo :selecionado é invalido.',
    'numeric'              => 'O :atributo deve ser um numero.',
    'present'              => 'O :atributo campo deve estar presente.',
    'regex'                => 'O :atributo formato é invalido.',
    'required'             => 'O :atributo campo é requerido',
    'required_if'          => 'O :atributo campo é requerido enquanto :outro é :valor.',
    'required_unless'      => 'O :atributo campo é requerido unless :other is in :values.',
    'required_with'        => 'O :atributo campo é requerido enquanto :valor está presente.',
    'required_with_all'    => 'O :atributo campo é requerido enquanto :valor está presente.',
    'required_without'     => 'O :atributo campo é requerido enquanto :valor não está  presente.',
    'required_without_all' => 'O :atributo campo é requerido enquanto nenhum dos :valores estão presentes.',
    'same'                 => 'O :atributo and :other must match.',
    'size'                 => [
        'numeric' => 'O :atributo deve ser :size.',
        'file'    => 'O :atributo deve ser :size kilobytes.',
        'string'  => 'O :atributo deve ser :size characters.',
        'array'   => 'O :atributo deve conter :size items.',
    ],
    'string'               => 'O :atributo deve ser uma string.',
    'timezone'             => 'O :atributo deve ser uma zona valida.',
    'unique'               => 'O :atributo já foi tomado.',
    'url'                  => 'O :atributo com este formato é invalido.',

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
