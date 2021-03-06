<x-jet-action-section>
    <x-slot name="title">
        Delete Account
    </x-slot>

    <x-slot name="description">
        Permanently delete your account.
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
        </div>

        <div class="mt-5">
            <x-jet-danger-button data-toggle="modal" data-target="#delete-user-modal" wire:loading.attr="disabled">
                Delete Account
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal id="delete-user-modal">
            <x-slot name="title">
                Delete Account
            </x-slot>

            <x-slot name="content">
                Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4" placeholder="Password"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button data-dismiss="modal">
                    Nevermind
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="data-dismiss='modal'">
                    Delete Account
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
