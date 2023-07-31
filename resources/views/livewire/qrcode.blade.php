<?php

use function Livewire\Volt\{state, computed};

state(['count' => 0]);

$increment = fn () => $this->count++;

$image = computed(function() {
    return QrCode::generate($this->count);
});

?>

<div>
    <h1>{{ $count }}</h1>
    {{ $this->image }}<br>
    <button wire:click="increment">+</button>
</div>
