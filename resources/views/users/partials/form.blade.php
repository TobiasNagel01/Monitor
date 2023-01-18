@csrf

<div class="mb-4 sm:mb-5 space-y-2">
    <x-input :model="$user ?? null" id="name" title="Name"/>
    <x-input :model="$user ?? null" id="email" title="Email"/>
    <x-input :model="$user ?? null" type="password" id="password" title="Password" value="" :placeholder="isset($user) ? 'Leave blank to keep password' : ''" />
</div>
<div class="flex items-center justify-end space-x-4">
    <x-button::outline.blue text="Save" submit />
</div>
