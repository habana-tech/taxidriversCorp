<template>
    <div class="custom-shape-divider-top-tiltDivider">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>
</template>

<script>
    export default {
        name: "tiltDivider"
    }
</script>

<style>
    .custom-shape-divider-top-tiltDivider {
        /*position: absolute;*/
        top: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
    }

    .custom-shape-divider-top-tiltDivider svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 37px;
        transform: rotateY(180deg);
    }

    .custom-shape-divider-top-tiltDivider .shape-fill {
        fill: #ffffff;
    }
</style>
