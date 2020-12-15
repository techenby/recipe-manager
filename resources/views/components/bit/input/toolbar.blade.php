<div>
    <div x-data="toolbar()" class="z-0 inline-flex rounded-md shadow-sm">
        <input type="text" x-ref="input" class="fixed top-0 left-0 z-0 w-12 -mt-12 -ml-12" x-model="value" />
        <x-bit.button.secondary @click="insert('⅛')" type="button" class="rounded-r-none">⅛</x-bit.button.secondary>
        <x-bit.button.secondary @click="insert('¼')" type="button" class="-ml-px rounded-l-none rounded-r-none">¼</x-bit.button.secondary>
        <x-bit.button.secondary @click="insert('⅓')" type="button" class="-ml-px rounded-l-none rounded-r-none">⅓</x-bit.button.secondary>
        <x-bit.button.secondary @click="insert('½')" type="button" class="-ml-px rounded-l-none rounded-r-none">½</x-bit.button.secondary>
        <x-bit.button.secondary @click="insert('⅔')" type="button" class="-ml-px rounded-l-none rounded-r-none">⅔</x-bit.button.secondary>
        <x-bit.button.secondary @click="insert('¾')" type="button" class="-ml-px rounded-l-none rounded-r-none">¾</x-bit.button.secondary>
        <x-bit.button.secondary @click="insert('c.')" type="button" class="-ml-px rounded-l-none rounded-r-none">Cup</x-bit.button.secondary>
        <x-bit.button.secondary @click="insert('tbs.')" type="button" class="-ml-px rounded-l-none rounded-r-none">Tablespoon</x-bit.button.secondary>
        <x-bit.button.secondary @click="insert('tsp.')" type="button" class="-ml-px rounded-l-none rounded-r-none">Teaspoon</x-bit.button.secondary>
        <x-bit.button.secondary @click="insert('lb')" type="button" class="-ml-px rounded-l-none rounded-r-none">Pound</x-bit.button.secondary>
        <x-bit.button.secondary @click="insert('lbs')" type="button" class="-ml-px rounded-l-none">Pounds</x-bit.button.secondary>
    </div>

    <script>
        function toolbar() {
            return {
                value: '',

                insert: function(value) {
                    this.value = value;
                    this.$nextTick(() => {
                        this.$refs.input.focus();
                        this.$refs.input.select();
                        try {
                            var successful = document.execCommand('copy');
                            var msg = successful ? 'successful' : 'unsuccessful';
                            console.log('Copying text command was ' + msg);
                        } catch (err) {
                            console.log('Oops, unable to copy');
                        }
                    })
                },
            }
        }
    </script>
</div>
