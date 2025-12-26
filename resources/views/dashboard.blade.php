<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <div class="absolute inset-0 p-6 bg-white dark:bg-zinc-800 flex flex-col gap-3">
            <flux:date-picker mode="range" max-range="10" />
            <flux:dropdown hover position="bottom" align="start" offset="-16" gap="10">
    <button type="button" class="flex items-center gap-3">
        <flux:avatar size="sm" name="Caleb Porzio" src="https://unavatar.io/x/calebporzio" />

        <flux:heading>Caleb Porzio</flux:heading>
    </button>

    <flux:popover class="flex flex-col gap-3 rounded-xl shadow-xl">
        <flux:avatar size="xl" name="Caleb Porzio" src="https://unavatar.io/x/calebporzio" />

        <div>
            <flux:heading size="lg">Caleb Porzio</flux:heading>

            <div class="flex items-center gap-2">
                <flux:text size="lg">@calebporzio</flux:text>
                <flux:badge>Follows you</flux:badge>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <flux:text class="flex gap-1"><flux:heading>775</flux:heading> following</flux:text>
            <flux:text class="flex gap-1"><flux:heading>50.2k</flux:heading> followers</flux:text>
        </div>

        <div class="flex gap-2">
            <flux:button variant="outline" size="sm" icon="check" icon:class="opacity-75" class="flex-1">Following</flux:button>
            <flux:button variant="primary" size="sm" icon="chat-bubble-left-right" icon:class="opacity-75" class="flex-1">Message</flux:button>
        </div>
    </flux:popover>
</flux:dropdown>
<flux:dropdown>
    <flux:button icon="chat-bubble-oval-left" icon:variant="micro" icon:class="text-zinc-300">
        Feedback
    </flux:button>

    <flux:popover class="min-w-[30rem] flex flex-col gap-4">
        <flux:radio.group variant="buttons" class="*:flex-1">
            <flux:radio icon="bug-ant" checked>Bug report</flux:radio>
            <flux:radio icon="light-bulb">Suggestion</flux:radio>
            <flux:radio icon="question-mark-circle">Question</flux:radio>
        </flux:radio.group>

        <div class="relative">
            <flux:textarea
                rows="8"
                class="dark:bg-transparent!"
                placeholder="Please include reproduction steps. You may attach images or video files."
            />

            <div class="absolute bottom-3 left-3 flex items-center gap-2">
                <flux:button variant="filled" size="xs" icon="face-smile" icon:variant="outline" icon:class="text-zinc-400 dark:text-zinc-300" />
                <flux:button variant="filled" size="xs" icon="paper-clip" icon:class="text-zinc-400 dark:text-zinc-300" />
            </div>
        </div>

        <div class="flex gap-2 justify-end">
            <flux:button variant="filled" size="sm" kbd="esc" class="w-28">Cancel</flux:button>
            <flux:button size="sm" kbd="⏎" class="w-28">Submit</flux:button>
        </div>
    </flux:popover>
</flux:dropdown>
            </div>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <div class="absolute inset-0 p-6 bg-white dark:bg-zinc-800">
            <flux:checkbox.group wire:model="categories" label="Categories" variant="pills">
    <flux:checkbox value="fantasy" label="Fantasy" />
    <flux:checkbox value="science-fiction" label="Science fiction" />
    <flux:checkbox value="horror" label="Horror" />
    <flux:checkbox value="mystery" label="Mystery" />
    <flux:checkbox value="romance" label="Romance" />
    <flux:checkbox value="autobiography" label="Autobiography" />
    <flux:checkbox value="thriller" label="Thriller" />
    <flux:checkbox value="poetry" label="Poetry" />
    <flux:checkbox value="children" label="Children" />
</flux:checkbox.group>
                </div>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <div class="absolute inset-0 p-6 bg-white dark:bg-zinc-800 flex flex-col gap-3">
            <flux:checkbox.group wire:model="subscription" label="Subscription preferences" variant="cards" class="max-sm:flex-col">
    <flux:checkbox checked
        value="newsletter"
        label="Newsletter"
        description="Get the latest updates and offers."
    />
    <flux:checkbox
        value="updates"
        label="Product updates"
        description="Learn about new features and products."
    />
    <flux:checkbox
        value="invitations"
        label="Event invitations"
        description="Invitatations to exclusive events."
    />
</flux:checkbox.group>
<flux:editor class="**:data-[slot=content]:min-h-[100px]!" />
            </div>
            </div>
        </div>
</x-layouts.app>
