<template>
    <div>
        <Header/>
        <Carousel/>
        <Menu/>
        <Footer/>
    </div>
</template>
<script>
    const default_layout = "default";
import Header from "../Components/Header";
import Footer from "../Components/Footer";
import Carousel from "../Components/Carousel";
import Menu from "../Components/Menu";
    export default {
        computed: {},
        data() {
            return {
            }
        },
        components: {
            Header,
            Footer,
            Carousel,
            Menu
        }
    };
</script>
