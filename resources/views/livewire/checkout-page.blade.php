<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
	<h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
		Checkout
	</h1>
	<form wire:submit.prevent="comprar">
        <div class="grid grid-cols-12 gap-4">
            <div class="md:col-span-12 lg:col-span-8 col-span-12">
                <!-- Card -->
                <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                    <!-- Shipping Address -->
                    <div class="mb-6">
                        <h2 class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
                            Endereço para Envio
                        </h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="first_name">
                                    Primeiro Nome
                                </label>
                                <input wire:model="primeiro_nome" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('primeiro_nome') border-red-500 @enderror" id="first_name" type="text">
                                @error('primeiro_nome')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="last_name">
                                    Sobrenome
                                </label>
                                <input wire:model="sobrenome" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('sobrenome') border-red-500 @enderror" id="last_name" type="text">
                                @error('sobrenome')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="phone">
                                    Telefone
                                </label>
                                <input wire:model="celular" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('celular') border-red-500 @enderror" id="phone" type="text">
                                @error('celular')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="cep">
                                    CEP
                                </label>
                                <input wire:model="cep" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('cep') border-red-500 @enderror" id="cep" type="text">
                                @error('cep')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="block text-gray-700 dark:text-white mb-1" for="rua">
                                Rua
                            </label>
                            <input wire:model="rua" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('rua') border-red-500 @enderror" id="rua" type="text">
                            @error('rua')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                @enderror
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="numero">
                                    Número
                                </label>
                                <input wire:model="numero" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('numero') border-red-500 @enderror" id="numero" type="text">
                                @error('numero')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="complemento">
                                    Complemento
                                </label>
                                <input wire:model="complemento" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('complemento') border-red-500 @enderror" id="complemento" type="text">
                                @error('complemento')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="referencia">
                                    Referência
                                </label>
                                <input wire:model="referencia" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('referencia') border-red-500 @enderror" id="referencia" type="text">
                                @error('referencia')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="bairro">
                                    Bairro
                                </label>
                                <input wire:model="bairro" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('bairro') border-red-500 @enderror" id="bairro" type="text">
                                @error('bairro')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="cidade">
                                    Cidade
                                </label>
                                <input wire:model="cidade" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('cidade') border-red-500 @enderror" id="cidade" type="text">
                                @error('cidade')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="estado">
                                    Estado
                                </label>
                                <input wire:model="estado" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('estado') border-red-500 @enderror" id="estado" type="text">
                                @error('estado')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="text-lg font-semibold mb-4">
                        Método de Pagamento
                    </div>
                    <ul class="grid w-full gap-6 md:grid-cols-3">
                        <li>
                            <input wire:model="metodo_pagamento" class="hidden peer" id="cartao-small" required="" type="radio" value="cartao" />
                            <label class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700" for="cartao-small">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">
                                        Cartão de Credito
                                    </div>
                                </div>
                                <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none" viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    </path>
                                </svg>
                            </label>
                        </li>
                        <li>
                            <input wire:model="metodo_pagamento" class="hidden peer" id="boleto-small" required="" type="radio" value="boleto" />
                            <label class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700" for="boleto-small">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">
                                        Boleto
                                    </div>
                                </div>
                                <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none" viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    </path>
                                </svg>
                            </label>
                        </li>
                        <li>
                            <input wire:model="metodo_pagamento" class="hidden peer" id="pix-small" required="" type="radio" value="pix" />
                            <label class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700" for="pix-small">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">
                                        Pix
                                    </div>
                                </div>
                                <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none" viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    </path>
                                </svg>
                            </label>
                        </li>
                    </ul>
                    @error('metodo_pagamento')
                        <div class="text-red-500 text-sm">{{$message}}</div>
                    @enderror
                </div>
                <!-- End Card -->
            </div>
            <div class="md:col-span-12 lg:col-span-4 col-span-12">
                <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                    <div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
                        RESUMO COMPRA
                    </div>
                    <div class="flex justify-between mb-2 font-bold">
                        <span>
                            Subtotal
                        </span>
                        <span>
                            {{Number::currency($valor_total, 'BRL')}}
                        </span>
                    </div>
                    <div class="flex justify-between mb-2 font-bold">
                        <span>
                            Taxas
                        </span>
                        <span>
                            {{Number::currency(0, 'BRL')}}
                        </span>
                    </div>
                    <div class="flex justify-between mb-2 font-bold">
                        <span>
                            Valor do Envio
                        </span>
                        <span>
                            {{Number::currency(0, 'BRL')}}
                        </span>
                    </div>
                    <hr class="bg-slate-400 my-4 h-1 rounded">
                    <div class="flex justify-between mb-2 font-bold">
                        <span>
                            Valor Total
                        </span>
                        <span>
                            {{Number::currency($valor_total, 'BRL')}}
                        </span>
                    </div>
                    </hr>
                </div>
                <button type="submit" class="bg-green-500 mt-4 w-full p-3 rounded-lg text-lg text-white hover:bg-green-600">
                    <span wire:loading.remove>Fazer o Pedido</span>
                    <span wire:loading>Processando...</span>
                </button>
                <div class="bg-white mt-4 rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                    <div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
                        RESUMO CARRINHO
                    </div>
                    <ul class="divide-y divide-gray-200 dark:divide-gray-700" role="list">
                        @foreach ($carrinho_itens as $item)
                        <li class="py-3 sm:py-4" wire:key="{{$item['produto_id']}}">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img alt="{{$item['nome']}}" class="w-12 h-12 rounded-full" src="{{ url('storage/'.$item['imagem'])}}">
                                    </img>
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        {{$item['nome']}}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        {{$item['quantidade']}}
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{Number::currency($item['preco_total'], 'BRL')}}
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>
