<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Messages Default Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used when replying to various
    | messages that we need to display to the user. You can modify these
    | language lines according to the requirements of your application.
    |
    */

    /*
     |--------------------------------------------------------------------------
     | HTTP Status Messages
     |--------------------------------------------------------------------------
     */

    /*
     | Information
     |
     | 100 Continue
     | 101 Switching Protocols
     | 103 Checkpoint
     */

    'continue'	          => 'O servidor recebeu os cabeçalhos da solicitação e o cliente deve continuar enviando o corpo da solicitação.',
    'switching_protocols' => 'O solicitante solicitou ao servidor que troque de protocolo.',
    'checkpoint'	      => 'Usado na proposta de solicitações recuperáveis para retomar solicitações PUT ou POST abortadas.',

    /*
     | Successful
     |
     | 200 OK
     | 201 Created
     | 202 Accepted
     | 203 Non-Authoritative Information
     | 204 No Content
     | 205 Reset Content
     | 206 Partial Content
     */

    'ok'                            => 'A solicitação está OK.',
    'created'                       => 'Registro criado com sucesso.',
    'accepted'                      => 'A solicitação foi aceita para processamento, mas o processamento não foi concluído.',
    'non_authoritative_information' => 'A solicitação foi processada com êxito, mas está retornando informações que podem ser de outra fonte.',
    'no_content'                    => 'Nenhum conteúdo foi encontrado.',
    'reset_content'                 => 'A solicitação foi processada com sucesso, mas não está retornando nenhum conteúdo e requer que o solicitante redefina a exibição do documento.',
    'partial_content'               => 'O servidor está entregando apenas parte do recurso devido a um cabeçalho de intervalo enviado pelo cliente.',

    /*
     | Redirection
     |
     | 300 Multiple Choices
     | 301 Moved Permanently
     | 302 Found
     | 303 See Other
     | 304 Not Modified
     | 306 Switch Proxy
     | 307 Temporary
     | 308 Resume Incomplete
     */

    'multiple_choices'   => 'Uma lista de links. O usuário pode selecionar um link e ir para esse local. Máximo de cinco endereços.',
    'moved_permanently'  => 'A página solicitada foi movida para um novo URL.',
    'found'              => 'A página solicitada foi movida temporariamente para um novo URL.',
    'see_other'          => 'A página solicitada pode ser encontrada em um URL diferente.',
    'not_modified'       => 'A página solicitada não foi modificada desde a última solicitação.',
    'switch_proxy'       => 'Este Proxy não é mais utilizado.',
    'temporary_redirect' => 'Redirecionamento temporário. A página solicitada foi movida para um novo URL.',
    'resume_incomplete'  => 'A solicitação PUT ou POST foi abortada.',

    /*
     | Client Error
     |
     | 400 Bad Request
     | 401 Unauthorized
     | 402 Payment Required
     | 403 Forbidden
     | 404 Not Found
     | 405 Method Not Allowed
     | 406 Not Acceptable
     | 407 Proxy Authentication Required
     | 408 Request Timeout
     | 409 Conflict
     | 410 Gone
     | 411 Length Required
     | 412 Precondition Failed
     | 413 Request Entity Too Large
     | 414 Request-URI Too Long
     | 415 Unsupported Media Type
     | 416 Requested Range Not Satisfiable
     | 417 Expectation Failed
     */

    'bad_request'                     => 'A solicitação não pode ser atendida devido à sintaxe incorreta.',
    'unauthorized'                    => 'Não autorizado.',
    'payment_required'                => 'Pagamento Requerido.',
    'forbidden'                       => 'Solicitação proibida.',
    'not_found'                       => 'Não foi possível encontrar a página solicitada.',
    'method_not_allowed'              => 'Método da solicitação não permitido.',
    'not_acceptable'                  => 'A resposta do servidor não é aceitável.',
    'proxy_authentication_required'   => 'Autenticação de proxy necessária.',
    'request_timeout'                 => 'O tempo de requisição expirou.',
    'conflict'                        => 'A solicitação não pôde ser concluída devido a um conflito na requisição.',
    'gone'                            => 'A página solicitada não está mais disponível.',
    'length_required'                 => 'O "comprimento do conteúdo" não está definido. O servidor não aceitará a solicitação sem o comprimento.',
    'precondition_failed'             => 'Falha na pré-condição. O servidor avaliou-a como falsa.',
    'request_entity_too_large'        => 'O servidor não aceitará a solicitação, porque a entidade da solicitação é muito grande.',
    'request_uri_too_long'            => 'O servidor não aceitará a solicitação, porque o URL é muito longo. Ocorre quando você converte uma solicitação POST em uma solicitação GET com uma longa informação de consulta.',
    'unsupported_media_type'          => 'O servidor não aceitará a solicitação, porque o tipo de mídia não é suportado.',
    'requested_range_not_satisfiable' => 'O cliente solicitou uma parte do arquivo, mas o servidor não pode fornecer essa parte.',
    'expectation_failed'              => 'O servidor não pode atender aos requisitos do campo de cabeçalho da solicitação de espera.',

    /*
     | Server Error
     |
     | 500 Internal Server Error
     | 501 Not Implemented
     | 502 Bad Gateway
     | 503 Service Unavailable
     | 504 Gateway Timeout
     | 505 HTTP Version Not Supported
     | 511 Network Authentication Required
     */
    'internal_server_error'           => 'Erro interno do servidor.',
    'not_implemented'                 => 'O servidor não reconhece o método de solicitação ou não possui a capacidade de atender à solicitação.',
    'bad_gateway'                     => 'O servidor estava agindo como um gateway ou proxy e recebeu uma resposta inválida do servidor upstream.',
    'service_unavailable'             => 'O servidor está indisponível no momento (sobrecarregado ou inativo).',
    'gateway_timeout'                 => 'O servidor estava agindo como um gateway ou proxy e não recebeu uma resposta oportuna do servidor upstream.',
    'http_version_not_supported'      => 'O servidor não suporta a versão do protocolo HTTP usada na solicitação.',
    'network_authentication_required' => 'O cliente precisa se autenticar para obter acesso à rede.',

    /*
    |--------------------------------------------------------------------------
    | Custom Messages 
    |--------------------------------------------------------------------------
    */

    'failed_upload'     => 'Falha no upload.',
    'url_invalid'       => 'O URL inserido é inválido.',
    'url_unavailable'   => 'O URL inserido não está disponível.',
    'update'            => 'Registro atualizado.',
    'delete'            => 'Registro deletado.',
    'unsupported_drive' => 'Drive não suportado.',
    'timeout_expired'   => 'O tempo limite expirou.',
];
