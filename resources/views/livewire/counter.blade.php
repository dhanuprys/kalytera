<div>
    <h1>{{ $count }}</h1>
    <h2>{{ $title }}</h2>

    <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button>
    <input wire:model.live="title" />
</div>
