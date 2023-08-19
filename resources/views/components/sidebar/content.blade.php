<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Dashboard"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <i class="fa fa-dashboard" aria-hidden="true"></i>
        </x-slot>
    </x-sidebar.link>

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        Administrador
    </div>

    <x-sidebar.link
        title="Pacotes"
        href="{{ route('packs.index') }}"
        :isActive="request()->routeIs('packs.*')"
    >
        <x-slot name="icon">
            <i class="fa fa-box" aria-hidden="true"></i>
        </x-slot>
    </x-sidebar.link>
    <x-sidebar.link title="Vendedores" href="#">
        <x-slot name="icon">
            <i class="fa fa-users" aria-hidden="true"></i>
        </x-slot>
    </x-sidebar.link>
    <x-sidebar.link title="Contratos" href="#">
        <x-slot name="icon">
            <i class="fa fa-file" aria-hidden="true"></i>
        </x-slot>
    </x-sidebar.link>
    <x-sidebar.link title="Configurações" href="#">
        <x-slot name="icon">
            <i class="fa fa-gear" aria-hidden="true"></i>
        </x-slot>
    </x-sidebar.link>

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        Vendedor
    </div>

    <x-sidebar.link title="Empresas" href="#">
        <x-slot name="icon">
            <i class="fa fa-building" aria-hidden="true"></i>
        </x-slot>
    </x-sidebar.link>
    <x-sidebar.link title="Vendas" href="#">
        <x-slot name="icon">
            <i class="fa fa-cart-shopping" aria-hidden="true"></i>
        </x-slot>
    </x-sidebar.link>

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        Cliente
    </div>

    <x-sidebar.link title="Cadastro" href="#">
        <x-slot name="icon">
            <i class="fa fa-user" aria-hidden="true"></i>
        </x-slot>
    </x-sidebar.link>
    <x-sidebar.link title="Contrato" href="#">
        <x-slot name="icon">
            <i class="fa fa-file" aria-hidden="true"></i>
        </x-slot>
    </x-sidebar.link>

</x-perfect-scrollbar>
