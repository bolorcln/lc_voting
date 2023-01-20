<nav class="hidden md:flex items-center justify-between text-xs text-gray-400">
    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
        <li>
            <a wire:click.prevent="setStatus('All')" href="#"
                class="border-b-4 pb-3 @if($status == 'All') text-gray-900 border-blue @endif transition duration-150 ease-in hover:border-blue">
                All Ideas (87)
            </a>
        </li>
        <li>
            <a wire:click.prevent="setStatus('Considering')" href="#"
                class="border-b-4 pb-3 @if($status == 'Considering') text-gray-900 border-blue @endif transition duration-150 ease-in hover:border-blue">
                Considering (6)
            </a>
        </li>
        <li>
            <a wire:click.prevent="setStatus('In Progress') " href="#"
                class="border-b-4 pb-3 @if($status == 'In Progress') text-gray-900 border-blue @endif transition duration-150 ease-in hover:border-blue">
                In Progress (1)
            </a>
        </li>
    </ul>

    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
        <li>
            <a wire:click.prevent="setStatus('Implemented') " href="#"
                class="border-b-4 pb-3 @if($status == 'Implemented') text-gray-900 border-blue @endif transition duration-150 ease-in hover:border-blue">
                Implemented (10)
            </a>
        </li>
        <li> <a wire:click.prevent="setStatus('Closed')" href="#"
                class="border-b-4 pb-3 @if($status == 'Closed') text-gray-900 border-blue @endif transition duration-150 ease-in hover:border-blue">
                Closed (55)
            </a>
        </li>
    </ul>
</nav>