@csrf

<div class="mb-4 sm:mb-5 space-y-2">
    <x-input :model="$tenant ?? null" id="name" title="Name"/>
</div>
<div class="flex items-center justify-end space-x-4">
    <x-interface.button submit text="Save"/>
</div>
