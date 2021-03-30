<div class="p-6">
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
            <label for="last_name" class="block text-sm font-medium text-gray-700">Department name</label>
            <input wire:model="name" type="text" autocomplete="name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <x-button wire:click='submit' class="mt-6">
                {{ __('Save') }}
            </x-button>
        </div>
    </div>

    {{-- <div class="px-4 py-3 text-right sm:px-6">
        <button wire:click='submit' type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Save
        </button>
        
    </div> --}}
    @if($success)
        <div class="p-4 mt-4 text-orange-700 bg-orange-100 border-l-4 border-orange-500 alert-content" role="alert">
            <p class="font-bold">Success</p>
            <p>Your department was created successfully.</p>
            <x-button wire:click='alertDismiss' class="mt-6">
                {{ __('close') }}
            </x-button>
        </div>
    @endif
</div>
