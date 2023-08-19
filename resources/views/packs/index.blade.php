<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pacotes
        </h2>
        <x-button><a href="{{ route('packs.create') }}">Cadastrar</a></x-button>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <div class="min-w-full align-middle">
                        <table class="min-w-full divide-y divide-gray-200 border mt-5">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Título</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-center">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Valor</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-center">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Validade</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-center">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Data de criação</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Ações</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                            @foreach($packs as $pack)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $pack->id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $pack->title }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm text-center leading-5 text-gray-900">
                                        R$ {{ number_format($pack->value) }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm text-center leading-5 text-gray-900">
                                        @if ($pack->validity === 'annual')
                                            Anual
                                        @elseif ($pack->validity === 'semiannual')
                                            Semestral
                                        @elseif ($pack->validity === 'monthly')
                                            Mensal
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm text-center leading-5 text-gray-900">
                                        @if ($pack->status)
                                            <span class="text-green-500">Ativo</span>
                                        @else
                                            <span class="text-red-500">Inativo</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $pack->created_at?->format('d/m/Y H:i:s') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 flex gap-3">
                                        <a href="{{ route('packs.edit', $pack->id) }}">
                                            <x-button variant="warning">
                                                <i class="fas fa-edit"></i>
                                            </x-button>
                                        </a>
                                        <form method="POST" action="{{ route('packs.destroy', $pack->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <x-button variant="danger" onclick="if (!confirm('Você tem certeza que quer deletar?')) return false">
                                                <i class="fas fa-trash"></i>
                                            </x-button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-2">
                        {{ $packs->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
