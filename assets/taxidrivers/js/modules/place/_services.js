import SwipeListener from "swipe-listener";

class Services{
    constructor(){
        this.container = document.querySelector('.services__content');
        this.listener = SwipeListener(this.container);
        this.items = document.querySelectorAll('.services__content__type');
        this.buttons = document.querySelectorAll('.services__types button');
        this.activePos = 0;

        this.init();
        this.events();
    }

    init(){
        this.items.forEach((image, index)=>{
            let displacement = index*100;
            image.setAttribute("style", "transform: translateX(" + displacement + "%);");
        });

        this.buttons[0].classList.add('active');
    }

    events() {
        this.buttons.forEach((button) => {
           button.addEventListener('click', (e)=>{
               let index = button.getAttribute('data-index');
               this.move(index);
               e.preventDefault();
           })
        });

        this.container.addEventListener('swipe', (e) => {
            let directions = e.detail.directions;

            if (directions.left)
                this.move(this.activePos + 1);

            if (directions.right)
                this.move(this.activePos - 1);
        });
    }

    move(newActivePos){

        if (newActivePos < 0 || newActivePos > this.items.length)
            return;

        let diff = this.activePos - newActivePos;

        this.items.forEach((item, index)=>{
            let displacement = (index - this.activePos + diff)*100;
            item.setAttribute("style", "transform: translateX(" + displacement + "%);");
        });

        this.buttons.forEach((button)=>{
            button.classList.remove('active');
        });
        this.buttons[newActivePos].classList.add('active');

        this.activePos = newActivePos;
    }
}

export default Services;