<x-mail::message>
# Pedido Criado com Sucesso!

Obrigado por realizar o pedido. Seu número de pedido é: {{ $pedido->id }}

<x-mail::button :url="$url">
Ver Pedido
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
