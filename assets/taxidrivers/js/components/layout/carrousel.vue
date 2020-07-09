<template>

    <div class="Carrousel">
        <ul>
            <li>
                <a href="#test">
                    <img alt="Test" src="/components/Carrousel/images/1.jpg">
                    <b>Picasso</b>
                    <em>1923</em>
                </a>
            </li>
            <li>
                <a href="#test">
                    <img alt="Test" src="/components/Carrousel/images/2.jpg">
                    <b>Édouard</b>
                    <em>1923</em>
                </a>
            </li>
            <li>
                <a href="#test">
                    <img alt="Test" src="/components/Carrousel/images/3.jpg">
                    <b>Gustave</b>
                    <em>1923</em>
                </a>
            </li>
            <li>
                <a href="#test">
                    <img alt="Test" src="/components/Carrousel/images/4.jpg">
                    <b>René</b>
                    <em>1923</em>
                </a>
            </li>
            <li>
                <a href="#test">
                    <img alt="Test" src="/components/Carrousel/images/5.jpg">
                    <b>Salvador</b>
                    <em>1923</em>
                </a>
            </li>
            <li>
                <a href="#test">
                    <img alt="Test" src="/components/Carrousel/images/6.jpg">
                    <b>Edgar</b>
                    <em>1923</em>
                </a>
            </li>
            <li>
                <a href="#test">
                    <img alt="Test" src="/components/Carrousel/images/7.jpg">
                    <b>Edward</b>
                    <em>1923</em>
                </a>
            </li>
            <li>
                <a href="#test">
                    <img alt="Test" src="/components/Carrousel/images/1.jpg">
                    <b>Wassily</b>
                    <em>1923</em>
                </a>
            </li>
            <li>
                <a href="#test">
                    <img alt="Test" src="/components/Carrousel/images/2.jpg">
                    <b>Dalí</b>
                    <em>1923</em>
                </a>
            </li>
            <li>
                <a href="#test">
                    <img alt="Test" src="/components/Carrousel/images/3.jpg">
                    <b>Zurbaran</b>
                    <em>1923</em>
                </a>
            </li>
            <li>
                <a href="#test">
                    <img alt="Test" src="/components/Carrousel/images/4.jpg">
                    <b>Freud</b>
                    <em>1923</em>
                </a>
            </li>
            <li>
                <a href="#test">
                    <img alt="Test" src="/components/Carrousel/images/5.jpg">
                    <b>Bacon</b>
                    <em>1923</em>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "carrousel"
    }
</script>

<style scoped>
    /* General */
    .Carrousel{ background: #000;border-bottom: 20px solid #000; border-top: 20px solid #000; overflow: hidden}
    .Carrousel::after { display: block; clear: both; content: ""; }
    .Carrousel li::after,.Carrousel *{-webkit-transition: opacity 300ms, letter-spacing 1s, padding 300ms,  margin 300ms, filter 2s, transform 500ms; transition:opacity 500ms, letter-spacing 1s,padding 300ms, margin 300ms, filter 2s, transform 500ms;}
    /* Item */
    .Carrousel ul{ padding: 0 40px; overflow: scroll; width: 100%;  overflow-y: hidden; white-space: nowrap; margin-bottom: -17px; box-sizing: content-box;}
    .Carrousel ul:hover{ margin-left: -2%;}
    .Carrousel ul:hover li{ opacity: 0.5;}
    .Carrousel ul li{ min-width: 200px; margin: 0; padding: 2% 2px; filter: grayscale(100%); -webkit-transform-origin: center left; transform-origin: center left; position: relative;  display: inline-block; width: 13%;}
    .Carrousel a{ cursor: pointer; display: block;}
    .Carrousel a:after{ opacity: 0; content: ""; display: block; position: absolute; bottom: 17%; right: 17%; margin-right: -2px; margin-bottom: -1px; width: 20px;z-index: 4; height: 1px; background: #fff;}
    .Carrousel a:before{ opacity: 0; z-index: 10; content: ""; position: absolute; display: block; width: 10px; bottom: 17%; margin-bottom: -6px; right: 17%; margin-left: -10px; height: 10px; border:solid 1px #fff; border-top: none; border-left: none; transform: rotate(-45deg); }

    .Carrousel a img{width: 100%; display: block;}
    .Carrousel li::after{ pointer-events: none; z-index: 1; opacity: 0; position: absolute; height: 50%;  left: -2px; right: -2px; bottom: 0; content: ""; display: block;   background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9));  z-index: 1;;}
    .Carrousel a b{  font-weight: normal; z-index: 2; opacity: 0; display: block; color: #fff; font-size: 1.5em; text-decoration: none; position: absolute; bottom: 17%; left: 15%; margin: 0;}
    .Carrousel a em{z-index: 2; font-weight: 100; opacity: 0; display: block; color: #fff; font-size: 1.1em; text-decoration: none; font-style: normal; position: absolute; bottom: 10%; left: 15%; margin: 0;}
    /* Hover */
    .Carrousel ul li:hover{ padding-left: 2%; padding-right: 2%;}
    .Carrousel li:hover::after{ opacity: 1;}
    .Carrousel ul li:hover {filter: grayscale(10%); opacity: 1;}
    .Carrousel ul li:hover a b{ letter-spacing: 2px; opacity: 1; }
    .Carrousel ul li:hover a:after{ opacity: 0.2; }
    .Carrousel ul li:hover a:before{ opacity: 1; }
    .Carrousel ul li:hover a em{ transition-delay: 350ms; opacity: 0.7; }
    .Carrousel ul li:hover img{-webkit-transform: scale(1.1); transform: scale(1.1);}
    .Carrousel ul li:last-child:hover{ margin-right: 30px;}
</style>
