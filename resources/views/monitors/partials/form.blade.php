@csrf

<div class="mb-4 sm:mb-5 space-y-2">
    <x-input :model="$monitor ?? null" id="name" title="Name"/>
    <x-input :model="$monitor ?? null" id="target" title="Target" />
</div>
<div class="flex items-center justify-end space-x-4">
    <x-button::outline.blue text="Save" submit />
</div>
