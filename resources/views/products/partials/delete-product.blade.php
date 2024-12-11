<section class="space-y-6">
    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-delete-product')"
    >{{ __('Delete Product') }}</x-danger-button>

    <x-modal name="confirm-delete-product" focusable>
        <form method="post" action="{{ route('product.destroy', $product) }}" class="p-6">
            @csrf
            @method('DELETE')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Apakah anda ingin menghapus Product?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Product akan dihapus secara permanent!.') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Product') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
