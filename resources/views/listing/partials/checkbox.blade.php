<add-to-compare v-slot="addToCompare" :id="item.entity_id">
    <div class="mt-1 md:mt-2">
        <x-input.checkbox v-bind:checked="addToCompare.inCompare" @change="addToCompare.toggleCompare()">
            <span class="text-xs font-medium text-inactive md:text-sm">@lang('Compare this product')</span>
        </x-input.checkbox>
    </div>
</add-to-compare>