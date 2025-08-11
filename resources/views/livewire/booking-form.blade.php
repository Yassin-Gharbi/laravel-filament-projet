<div class="max-w-md mx-auto p-4 bg-white rounded shadow">
    @if (session()->has('message'))
        <div class="mb-4 p-3 bg-green-200 text-green-800 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-4">
        <div>
            <label for="property_id" class="block font-medium text-gray-700">Propriété</label>
            <select wire:model="property_id" id="property_id" class="w-full border rounded p-2">
                <option value="">-- Choisissez une propriété --</option>
                @foreach ($properties as $property)
                    <option value="{{ $property->id }}">{{ $property->name }}</option>
                @endforeach
            </select>
            @error('property_id') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="start_date" class="block font-medium text-gray-700">Date de début</label>
            <input type="date" wire:model="start_date" id="start_date" class="w-full border rounded p-2" />
            @error('start_date') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="end_date" class="block font-medium text-gray-700">Date de fin</label>
            <input type="date" wire:model="end_date" id="end_date" class="w-full border rounded p-2" />
            @error('end_date') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <button
			  type="submit"
			  class="bg-yellow-300 text-black px-4 py-2 rounded hover:bg-yellow-400 transition"
			>
			  Réserver
			</button>


        </div>
    </form>
</div>
