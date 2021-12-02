<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'O campo :attribute deve ser aceito.',
    'active_url'           => 'O campo :attribute não é uma URL válida.',
    'after'                => 'O campo :attribute deve ser uma data posterior a :date.',
    'after_or_equal'       => 'O campo :attribute deve ser uma data superior ou igual a :date.',
    'alpha'                => 'O campo :attribute deve ser apenas letras.',
    'alpha_dash'           => 'O campo :attribute só pode conter letras, números e traços.',
    'alpha_num'            => 'O campo :attribute só pode conter letras e números.',
    'array'                => 'O campo :attribute deve conter um array.',
    'before'               => 'O campo :attribute deve conter uma data anterior a :date.',
    'before_or_equal'      => 'O campo :attribute deve conter uma data inferior ou igual a :date.',
    'between'              => [
        'numeric' => 'O campo :attribute deve conter um número entre :min e :max.',
        'file'    => 'O campo :attribute deve conter um arquivo de :min a :max kilobytes.',
        'string'  => 'O campo :attribute deve conter entre :min a :max caracteres.',
        'array'   => 'O campo :attribute deve conter de :min a :max itens.',
    ],
    'boolean'              => 'O campo :attribute deve conter o valor verdadeiro ou falso.',
    'confirmed'            => 'A confirmação para o campo :attribute não coincide.',
    'date'                 => 'O campo :attribute não contém uma data válida.',
    'date_equals'          => 'O campo :attribute precisa conter uma data igual a :date.',
    'date_format'          => 'O valor do campo :attribute não respeita o formato :format.',
    'different'            => 'Os campos :attribute e :other devem conter valores diferentes.',
    'digits'               => 'O campo :attribute deve conter :digits dígitos.',
    'digits_between'       => 'O campo :attribute deve conter entre :min a :max dígitos.',
    'dimensions'           => 'O valor informado para o campo :attribute não é uma dimensão de imagem válida.',
    'distinct'             => 'O campo :attribute contém um valor duplicado.',
    'email'                => 'O campo :attribute precisa conter um endereço de email válido.',
    'ends_with'            => 'O campo :attribute precisa terminar com :values.',
    'exists'               => 'O valor selecionado para o campo :attribute é inválido.',
    'file'                 => 'O campo :attribute deve conter um arquivo.',
    'filled'               => 'O campo :attribute é obrigatório.',
    'gt'                   => [
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'file'    => 'O campo :attribute deve ser maior que :value kilobytes.',
        'string'  => 'O campo :attribute deve ser maior que :value caracteres.',
        'array'   => 'O campo :attribute deve ter mais que :value items.',
    ],
    'gte'                  => [
        'numeric' => 'O campo :attribute deve ser maior ou igual a :value.',
        'file'    => 'O campo :attribute deve ser maior ou igual a :value kilobytes.',
        'string'  => 'O campo :attribute deve ser maior ou igual a :value caracteres.',
        'array'   => 'O campo :attribute deve ter :value items ou mais.',
    ],
    'image'                => 'O campo :attribute deve conter uma imagem.',
    'in'                   => 'O campo :attribute não contém um valor válido.',
    'in_array'             => 'O campo :attribute não existe em :other.',
    'integer'              => 'O campo :attribute deve conter um número inteiro.',
    'ip'                   => 'O campo :attribute deve conter um IP válido.',
    'ipv4'                 => 'O campo :attribute deve conter um IPv4 válido.',
    'ipv6'                 => 'O campo :attribute deve conter um IPv6 válido.',
    'json'                 => 'O campo :attribute deve conter uma string JSON válida.',
    'lt'                   => [
        'numeric' => 'O campo :attribute deve ser menor que :value.',
        'file'    => 'O campo :attribute deve ser menor que :value kilobytes.',
        'string'  => 'O campo :attribute deve ser menor que :value caracteres.',
        'array'   => 'O campo :attribute deve ter menos do que :value items.',
    ],
    'lte'                  => [
        'numeric' => 'O campo :attribute deve ser menor ou igual a :value.',
        'file'    => 'O campo :attribute deve ser menor ou igual a :value kilobytes.',
        'string'  => 'O campo :attribute deve ser menor ou igual a :value caracteres.',
        'array'   => 'O campo :attribute não deve ter mais do que :value items.',
    ],
    'max'                  => [
        'numeric' => 'O campo :attribute não pode conter um valor superior a :max.',
        'file'    => 'O campo :attribute não pode conter um arquivo com mais de :max kilobytes.',
        'string'  => 'O campo :attribute não pode conter mais de :max caracteres.',
        'array'   => 'O campo :attribute deve conter no máximo :max itens.',
    ],
    'mimes'                => 'O campo :attribute deve conter um arquivo do tipo: :values.',
    'mimetypes'            => 'O campo :attribute deve conter um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => 'O campo :attribute deve conter um número superior ou igual a :min.',
        'file'    => 'O campo :attribute deve conter um arquivo com no mínimo :min kilobytes.',
        'string'  => 'O campo :attribute deve conter no mínimo :min caracteres.',
        'array'   => 'O campo :attribute deve conter no mínimo :min itens.',
    ],
    'multiple_of'          => 'O :attribute precisa ser múltiplo de :value',
    'not_in'               => 'O campo :attribute contém um valor inválido.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => 'O campo :attribute deve conter um valor numérico.',
    'password'             => 'Senha incorreta.',
    'present'              => 'O campo :attribute deve estar presente.',
    'regex'                => 'O formato do valor informado no campo :attribute é inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando o valor do campo :other é igual a :value.',
    'required_unless'      => 'O campo :attribute é obrigatório a menos que :other esteja presente em :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando um dos :values está presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values está presente.',
    'same'                 => 'Os campos :attribute e :other devem conter valores iguais.',
    'size'                 => [
        'numeric' => 'O campo :attribute deve conter o número :size.',
        'file'    => 'O campo :attribute deve conter um arquivo com o tamanho de :size kilobytes.',
        'string'  => 'O campo :attribute deve conter :size caracteres.',
        'array'   => 'O campo :attribute deve conter :size itens.',
    ],
    'starts_with'          => 'O campo :attribute precisa começar com um dos seguintes valores :values.',
    'string'               => 'O campo :attribute deve ser uma string.',
    'timezone'             => 'O campo :attribute deve conter um fuso horário válido.',
    'unique'               => 'O valor informado para o campo :attribute já está em uso.',
    'uploaded'             => 'Falha no Upload do arquivo :attribute.',
    'url'                  => 'O formato da URL informada para o campo :attribute é inválido.',
    'uuid'                 => 'O campo :attribute precisa conter um UUID válido.',
    'credit_card'          => [
        'card_expiration_month_invalid' => 'O mês de vencimento do cartão é inválido',
        'card_expiration_year_invalid'  => 'O ano de vencimento do cartão é inválido',
        'card_length_invalid'           => 'O numero do cartão está incompleto',
        'card_invalid'                  => 'O numero do cartão está inválido',
        'card_checksum_invalid'         => 'O numero do cartão está inválido',
        'card_cvc_invalid'              => 'O CCV do cartão está inválido',
    ],

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
        'procedimentos.*' => [
            'exists'  => 'Um ou mais procedimentos informados são inválidos.',
            'integer' => 'Um ou mais procedimentos informados são inválidos.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'age'                   => 'idade',
        'body'                  => 'conteúdo',
        'country'               => 'país',
        'date'                  => 'data',
        'day'                   => 'dia',
        'description'           => 'descrição',
        'excerpt'               => 'resumo',
        'first_name'            => 'primeiro nome',
        'gender'                => 'gênero',
        'hour'                  => 'hora',
        'last_name'             => 'sobrenome',
        'message'               => 'mensagem',
        'minimum_price'         => 'preço mínimo',
        'minimum_value'         => 'valor mínimo',
        'minute'                => 'minuto',
        'mobile'                => 'celular',
        'month'                 => 'mês',
        'password'              => 'senha',
        'password_confirmation' => 'confirmação da senha',
        'procedures'            => 'procedimentos',
        'province'              => 'estado',
        'second'                => 'segundo',
        'sex'                   => 'sexo',
        'state'                 => 'estado',
        'subject'               => 'assunto',
        'text'                  => 'texto',
        'time'                  => 'hora',
        'title'                 => 'título',
        'type'                  => 'tipo',
        'username'              => 'usuário',
        'value'                 => 'valor',
        'price'                 => 'valor',
        'year'                  => 'ano',

        'email'                        => 'e-mail',
        'city'                         => 'cidade',
        'active'                       => 'ativo',
        'name'                         => 'nome',
        'person_type'                  => 'tipo',
        'city_id'                      => 'cidade',
        'address'                      => 'endereço',
        'complement'                   => 'complemento',
        'neighborhood'                 => 'bairro',
        'number_address'               => 'número',
        'zipcode'                      => 'CEP',
        'phone'                        => 'telefone',
        'office'                       => 'profissão',
        'company_name'                 => 'razão social',
        'state_registration_indicator' => 'indicador de inscrição estadual',
        'state_registration'           => 'inscrição estadual',
        'commercial_phone'             => 'telefone comercial',
        'cellphone'                    => 'telefone celular',
        'address_title'                => 'título do endereço',
        'landmark'                     => 'ponto de referência',
    ],

    'cpf'           => 'CPF inválido',
    'cpf_if'        => 'CPF inválido',
    'cnpj'          => 'CNPJ inválido',
    'cnpj_if'       => 'CNPJ inválido',
    'placa_veiculo' => 'O campo :attribute não possui um formato válido de uma placa de veículo.',

];
