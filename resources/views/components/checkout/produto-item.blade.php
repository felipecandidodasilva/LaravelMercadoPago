<li class="flex items-start space-x-4 py-6">
    <img
        class="h-20 w-20 flex-none rounded-md object-cover object-center"
        src="{{ $imagem }}"
        alt="IMAGEM DO {{ $nome }}"
    >
    <div class="flex-auto space-y-1">
        <h3 class="text-base text-white">{{ $nome }}</h3>
        @foreach($detalhes as $detalhe)
            <p class="text-primary-200">{{ $detalhe }}</p>
        @endforeach
    </div>
    <div class="flex flex-col">
        <p class="flex-none text-base font-medium text-secondary-300">R$: {{$preco}}</p>
        <p class="text-white">x {{$quantidade}}</p>
    </div>
</li>