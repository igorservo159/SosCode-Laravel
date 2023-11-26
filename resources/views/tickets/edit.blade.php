<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('tickets.update', $ticket) }}">
            @csrf
            @method('patch')
            <textarea
                name="message"
                class=" mb-3 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message', $ticket->message) }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            
            <select name="category" id="category" required>
                <option value="Desenvolvimento Web" {{ $ticket->category === 'Desenvolvimento Web' ? 'selected' : '' }}>Desenvolvimento Web</option>
                <option value="Programação Embarcada" {{ $ticket->category === 'Programação Embarcada' ? 'selected' : '' }}>Programação Embarcada</option>
                <option value="Inteligência Artificial" {{ $ticket->category === 'Inteligência Artificial' ? 'selected' : '' }}>Inteligência Artificial</option>
                <option value="Banco de Dados" {{ $ticket->category === 'Banco de Dados' ? 'selected' : '' }}>Banco de Dados</option>
                <option value="Outros" {{ $ticket->category === 'Outros' ? 'selected' : '' }}>Outros</option>
            </select>
            <x-input-error :messages="$errors->get('category')" class="mt-2" />
            
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('tickets.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>