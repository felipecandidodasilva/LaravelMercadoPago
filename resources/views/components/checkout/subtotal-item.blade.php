<div
    @class([
        "flex items-center justify-between",
        "border-t border-white border-opacity-10 pt-6 text-white" => $ultimo ?? false,
    ])

>
    <dt class="text-primary-200">{{ $titulo }}</dt>
    <dd class="text-secondary-300">R$: {{$valor}}</dd>
</div>