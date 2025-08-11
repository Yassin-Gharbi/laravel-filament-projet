<div>
    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submitBooking" class="space-y-4">
        <div>
            <label for="property_id" class="block font-medium text-sm text-gray-700">Propriété</label>
            <select wire:model="property_id" id="property_id" class="mt-1 block w-full rounded-md border-gray-300">
                <option value="">-- Choisir une propriété --</option>
                @foreach(\App\Models\Property::all() as $property)
                    <option value="{{ $property->id }}">{{ $property->name }}</option>
                @endforeach
            </select>
            @error('property_id') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="start_date" class="block font-medium text-sm text-gray-700">Date de début</label>
            <input type="date" wire:model="start_date" id="start_date" class="mt-1 block w-full rounded-md border-gray-300" />
            @error('start_date') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="end_date" class="block font-medium text-sm text-gray-700">Date de fin</label>
            <input type="date" wire:model="end_date" id="end_date" class="mt-1 block w-full rounded-md border-gray-300" />
            @error('end_date') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-primary text-white px-4 py-2 rounded hover:bg-primary-dark">
            Réserver
        </button>
    </form>
</div>
