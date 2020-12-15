<div
    x-data="{
        content: @entangle($attributes->wire('model'))
    }"
>
    <alpine-editor
        x-model="content"
        data-h1-classes="text-xl"
        data-editor-classes="px-3 py-2 border border-gray-300 dark:border-gray-400 dark:text-gray-200 dark:bg-gray-700 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
    >
        <div data-type="menu">
            <x-bit.button.secondary type="button" data-command="strong" data-active-class="bg-blue-400">Bold</x-bit.button.secondary>
            <x-bit.button.secondary type="button" data-command="em" data-active-class="bg-blue-400">Emphasize</x-bit.button.secondary>
            <x-bit.button.secondary type="button" data-command="ordered_list" data-active-class="bg-blue-400">Ordered List</x-bit.button.secondary>
            <x-bit.button.secondary type="button" data-command="bullet_list" data-active-class="bg-blue-400">Bullet List</x-bit.button.secondary>
        </div>

        <div data-type="editor" class="mt-2"></div>
    </alpine-editor>
</div>
