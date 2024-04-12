@extends('rapidez::layouts.app')

@section('title', __('Product compare list'))
@section('description', __('Page to view compare list of the user'))

@section('content')
    <div class="container">
        <h1 class="mb-5 text-3xl font-bold">{{ __('Compare') }}</h1>
        <product-compare v-slot="compare">
            <div class="w-full overflow-x-scroll" v-cloak>
                <div class="flex py-4 z-20 border-b space-x-16">
                    <div class="sticky left-0 w-1/5 flex-shrink-0 bg-white"></div>
                    <a class="relative w-1/5 flex-shrink-0" v-for="item, key in compare.items" :href="item.product.url_key">
                        <x-heroicon-c-x-mark class="absolute top-1 right-1 w-6 h-6" @click.prevent="compare.remove(item.uid)" />
                        <img :src="'/storage/{{ config('rapidez.store') }}/resizes/200/magento/catalog/product/' + compare.formatImage(item.product.image.url) + '.webp'" :alt="item.product.image.name">
                        <strong class="mt-5">
                            @{{ item.product.name }}
                        </strong>
                        <div class="text-14 flex items-center gap-2">
                            <div v-if="item.product.price_range.minimum_price.final_price.value">
                                <span class="relative">
                                    @{{ item.product.price_range.minimum_price.final_price.value | priceDash }}
                                </span>
                            </div>
                        </div>

                    </a>
                </div>

                <div class="flex px-8 py-4 space-x-16 border-b" v-for="attribute, key in compare.attributes">
                    <div class="sticky bg-white left-0 w-1/5 flex-shrink-0">
                        <strong>@{{ attribute.label }}</strong>
                    </div>
                    <div class="w-1/5 flex-shrink-0" v-for="product, key in compare.items">
                        @{{ product.attributes.find((attr) => attr.code === attribute.code)?.value }}
                    </div>
                </div>
            </div>
        </product-compare>
    </div>
@endsection
