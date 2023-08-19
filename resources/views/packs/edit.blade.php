<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            Editar pacote {{ "#{$pack->id} - {$pack->title}" }}
        </h2>
    </x-slot>

    <div class="space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg dark:bg-gray-800">
                    <form
                        method="post"
                        action="{{ route('packs.update', $pack->id) }}"
                    >
                        @csrf

                        <div class="mb-5 grid grid-cols-4 gap-y-6 gap-x-4">
                            <div class="space-y-2">
                                <x-form.label
                                    for="title"
                                    :value="__('Título')"
                                />

                                <x-form.input
                                    id="title"
                                    name="title"
                                    type="text"
                                    class="block w-full"
                                    :value="old('title')"
                                    required
                                    autofocus
                                    autocomplete="title"
                                />

                                <x-form.error :messages="$errors->get('title')" />
                            </div>

                            <div class="space-y-2">
                                <x-form.label
                                    for="title"
                                    :value="__('Título')"
                                />

                                <x-form.input
                                    id="title"
                                    name="title"
                                    type="text"
                                    class="block w-full"
                                    :value="old('title')"
                                    required
                                    autofocus
                                    autocomplete="title"
                                />

                                <x-form.error :messages="$errors->get('title')" />
                            </div>

                            <div class="space-y-2">
                                <x-form.label
                                    for="title"
                                    :value="__('Título')"
                                />

                                <x-form.input
                                    id="title"
                                    name="title"
                                    type="text"
                                    class="block w-full"
                                    :value="old('title')"
                                    required
                                    autofocus
                                    autocomplete="title"
                                />

                                <x-form.error :messages="$errors->get('title')" />
                            </div>

                            <div class="space-y-2">
                                <x-form.label
                                    for="title"
                                    :value="__('Título')"
                                />

                                <x-form.input
                                    id="title"
                                    name="title"
                                    type="text"
                                    class="block w-full"
                                    :value="old('title')"
                                    required
                                    autofocus
                                    autocomplete="title"
                                />

                                <x-form.error :messages="$errors->get('title')" />
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <x-button>
                                {{ __('Save') }}
                            </x-button>
                        </div>
                    </form>
        </div>
    </div>
</x-app-layout>
