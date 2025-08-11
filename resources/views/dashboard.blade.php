<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-900 leading-tight flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" 
                 fill="none" viewBox="0 0 24 24" 
                 stroke-width="1.5" stroke="currentColor" 
                 class="w-6 h-6 text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round" 
                      d="M3 3v1.5M21 3v1.5M3 7.5h18M4.5 21h15a1.5 1.5 0 001.5-1.5v-13.5a1.5 1.5 0 00-1.5-1.5h-15A1.5 1.5 0 003 6.5v13a1.5 1.5 0 001.5 1.5z" />
            </svg>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            {{-- Message de bienvenue --}}
			<div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-black p-6 rounded-lg shadow-md">
				<h3 class="text-xl font-semibold">Bienvenue ! 🎉</h3>
				<p class="mt-1 text-sm">Vous êtes connecté avec succès à votre espace personnel.</p>
			</div>


            {{-- Formulaire de réservation --}}
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">📅 Faire une réservation</h3>
                <div class="border-t border-gray-200 my-4"></div>
                <livewire:booking-form />
            </div>

        </div>
    </div>
</x-app-layout>
