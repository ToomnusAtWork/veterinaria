<div x-data="{
    selectOpen: false,
    selectedItem: '',
    selectableItems: [{
            title: 'Milk',
            value: 'milk',
            disabled: false
        },
        {
            title: 'Eggs',
            value: 'eggs',
            disabled: false
        },
        {
            title: 'Cheese',
            value: 'cheese',
            disabled: false
        },
        {
            title: 'Bread',
            value: 'bread',
            disabled: false
        },
        {
            title: 'Apples',
            value: 'apples',
            disabled: false
        },
        {
            title: 'Bananas',
            value: 'bananas',
            disabled: false
        },
        {
            title: 'Yogurt',
            value: 'yogurt',
            disabled: false
        },
        {
            title: 'Sugar',
            value: 'sugar',
            disabled: false
        },
        {
            title: 'Salt',
            value: 'salt',
            disabled: false
        },
        {
            title: 'Coffee',
            value: 'coffee',
            disabled: false
        },
        {
            title: 'Tea',
            value: 'tea',
            disabled: false
        }
    ],
    selectableItemActive: null,
    selectId: $id('select'),
    selectKeydownValue: '',
    selectKeydownTimeout: 1000,
    selectKeydownClearTimeout: null,
    selectDropdownPosition: 'bottom',
    selectableItemIsActive(item) {
        return this.selectableItemActive && this.selectableItemActive.value == item.value;
    },
    selectableItemActiveNext() {
        let index = this.selectableItems.indexOf(this.selectableItemActive);
        if (index < this.selectableItems.length - 1) {
            this.selectableItemActive = this.selectableItems[index + 1];
            this.selectScrollToActiveItem();
        }
    },
    selectableItemActivePrevious() {
        let index = this.selectableItems.indexOf(this.selectableItemActive);
        if (index > 0) {
            this.selectableItemActive = this.selectableItems[index - 1];
            this.selectScrollToActiveItem();
        }
    },
    selectScrollToActiveItem() {
        if (this.selectableItemActive) {
            activeElement = document.getElementById(this.selectableItemActive.value + '-' + this.selectId)
            newScrollPos = (activeElement.offsetTop + activeElement.offsetHeight) - this.$refs.selectableItemsList.offsetHeight;
            if (newScrollPos > 0) {
                this.$refs.selectableItemsList.scrollTop = newScrollPos;
            } else {
                this.$refs.selectableItemsList.scrollTop = 0;
            }
        }
    },
    selectKeydown(event) {
        if (event.keyCode >= 65 && event.keyCode <= 90) {
            this.selectKeydownValue += event.key;
            selectedItemBestMatch = this.selectItemsFindBestMatch();
            if (selectedItemBestMatch) {
                if (this.selectOpen) {
                    this.selectableItemActive = selectedItemBestMatch;
                    this.selectScrollToActiveItem();
                } else {
                    this.selectedItem = this.selectableItemActive = selectedItemBestMatch;
                }
            }
            if (this.selectKeydownValue != '') {
                clearTimeout(this.selectKeydownClearTimeout);
                this.selectKeydownClearTimeout = setTimeout(() => {
                    this.selectKeydownValue = '';
                }, this.selectKeydownTimeout);
            }
        }
    },
    selectItemsFindBestMatch() {
        typedValue = this.selectKeydownValue.toLowerCase();
        var bestMatch = null;
        var bestMatchIndex = -1;
        for (var i = 0; i < this.selectableItems.length; i++) {
            var title = this.selectableItems[i].title.toLowerCase();
            var index = title.indexOf(typedValue);
            if (index > -1 && (bestMatchIndex == -1 || index < bestMatchIndex) && !this.selectableItems[i].disabled) {
                bestMatch = this.selectableItems[i];
                bestMatchIndex = index;
            }
        }
        return bestMatch;
    },
    selectPositionUpdate() {
        selectDropdownBottomPos = this.$refs.selectButton.getBoundingClientRect().top + this.$refs.selectButton.offsetHeight + parseInt(window.getComputedStyle(this.$refs.selectableItemsList).maxHeight);
        if (window.innerHeight < selectDropdownBottomPos) {
            this.selectDropdownPosition = 'top';
        } else {
            this.selectDropdownPosition = 'bottom';
        }
    }
}" x-init="$watch('selectOpen', function() {
    if (!selectedItem) {
        selectableItemActive = selectableItems[0];
    } else {
        selectableItemActive = selectedItem;
    }
    setTimeout(function() {
        selectScrollToActiveItem();
    }, 10);
    selectPositionUpdate();
    window.addEventListener('resize', (event) => { selectPositionUpdate(); });
});" @keydown.escape="if(selectOpen){ selectOpen=false; }"
    @keydown.down="if(selectOpen){ selectableItemActiveNext(); } else { selectOpen=true; } event.preventDefault();"
    @keydown.up="if(selectOpen){ selectableItemActivePrevious(); } else { selectOpen=true; } event.preventDefault();"
    @keydown.enter="selectedItem=selectableItemActive; selectOpen=false;" @keydown="selectKeydown($event);"
    class="relative mx-5">
    <button x-ref="selectButton" @click="selectOpen=!selectOpen"
        :class="{ 'focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400': !selectOpen }"
        class="relative flex items-center justify-between w-full py-3 pl-3 pr-10 text-left bg-white border rounded-md shadow-sm cursor-default border-gray-600 focus:outline-none text-sm">
        <span x-text="selectedItem ? selectedItem.title : 'Select Location'" class="ml-2 truncate">Select Location</span>
        <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"/><circle cx="12" cy="10" r="3"/></svg>
        </span>
    </button>
    <ul x-show="selectOpen" x-ref="selectableItemsList" @click.away="selectOpen = false"
        x-transition:enter="transition ease-out duration-50" x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100"
        :class="{ 'bottom-0 mb-10': selectDropdownPosition == 'top', 'top-0 mt-11': selectDropdownPosition == 'bottom' }"
        class="absolute w-full py-1 mt-1 overflow-auto text-sm bg-white rounded-md shadow-md max-h-56 ring-1 ring-black ring-opacity-5 focus:outline-none"
        x-cloak>
        <template x-for="item in selectableItems" :key="item.value">
            <li @click="selectedItem=item; selectOpen=false; $refs.selectButton.focus();"
                :id="item.value + '-' + selectId" :data-disabled="item.disabled"
                :class="{ 'bg-neutral-100 text-gray-900': selectableItemIsActive(item), '': !selectableItemIsActive(item) }"
                @mousemove="selectableItemActive=item"
                class="relative flex items-center h-full py-2 pl-8 text-gray-700 cursor-default select-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                <svg x-show="selectedItem.value==item.value"
                    class="absolute left-0 w-4 h-4 ml-2 stroke-current text-neutral-400"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                <span class="block font-medium truncate" x-text="item.title"></span>
            </li>
        </template>
    </ul>
</div>
