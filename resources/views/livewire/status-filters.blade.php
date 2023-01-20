<nav class="hidden md:flex items-center justify-between text-xs text-gray-400">
    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
        <li>
            <a wire:click.prevent="setStatus('All')" href="#"
                class="border-b-4 pb-3 @if($status == 'All') text-gray-900 border-blue @endif transition duration-150 ease-in hover:border-blue">
                All Ideas ({{ $statusCount['all_statuses'] }})
            </a>
        </li>
        <li>
            <a wire:click.prevent="setStatus('Considering')" href="#"
                class="border-b-4 pb-3 @if($status == 'Considering') text-gray-900 border-blue @endif transition duration-150 ease-in hover:border-blue">
                Considering ({{ $statusCount['considering'] }})
            </a>
        </li>
        <li>
            <a wire:click.prevent="setStatus('In Progress') " href="#"
                class="border-b-4 pb-3 @if($status == 'In Progress') text-gray-900 border-blue @endif transition duration-150 ease-in hover:border-blue">
                In Progress ({{ $statusCount['in_progress'] }})
            </a>
        </li>
    </ul>

    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
        <li>
            <a wire:click.prevent="setStatus('Implemented') " href="#"
                class="border-b-4 pb-3 @if($status == 'Implemented') text-gray-900 border-blue @endif transition duration-150 ease-in hover:border-blue">
                Implemented ({{ $statusCount['implemented'] }})
            </a>
        </li>
        <li> <a wire:click.prevent="setStatus('Closed')" href="#"
                class="border-b-4 pb-3 @if($status == 'Closed') text-gray-900 border-blue @endif transition duration-150 ease-in hover:border-blue">
                Closed ({{ $statusCount['closed'] }})
            </a>
        </li>
    </ul>
</nav>