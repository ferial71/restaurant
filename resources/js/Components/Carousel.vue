<template>

    <vue-flux
        :options="vfOptions"
        :images="vfImages"
        :transitions="vfTransitions"
        ref="slider">

        <template v-slot:preloader>
            <flux-preloader />
        </template>

        <template v-slot:caption>
            <flux-caption />
        </template>

        <template v-slot:controls>
            <flux-controls />
        </template>

        <template v-slot:pagination>
            <flux-pagination />
        </template>
    </vue-flux>

</template>

<script>
    import {
        VueFlux,
        FluxCaption,
        FluxControls,
        FluxIndex,
        FluxPagination,
        FluxPreloader,
    } from 'vue-flux';

    export default {
        components: {
            VueFlux,
            FluxCaption,
            FluxControls,
            FluxIndex,
            FluxPagination,
            FluxPreloader,
        },

        data: () => ({
            vfOptions: {
                autoplay: true
            },
            vfImages: [ 'images/slider-01.jpg', 'images/slider-02.jpg', 'images/slider-03.jpg' ],
            vfTransitions: [ 'fade' ],
            vfCaptions: [
                'Caption for image 1',
                'Caption for image 2',
                'Caption for image 3',
            ],
        }),
    }
</script>
