document.addEventListener("DOMContentLoaded", function(event) {
    //Аккордеон на главнйо странице
    if (document.querySelectorAll('#js-accordeon').length !== 0){
        const content = document.querySelector('#js-accordeon-content')
        const btn = document.querySelector('.main__section-bot .js-btn').addEventListener('click', function(button){
    
            if (button.currentTarget.classList.contains('js-active')){
                button.currentTarget.classList.remove('js-active')
                content.style.cssText = 'height:0'
            } else {
                let totalHeight = 0;
                let ban = content.children;
                for (let i = 0; i < ban.length; i++){
                    totalHeight += ban[i].clientHeight;
                }
                content.style.cssText = `height: ${totalHeight + 80}px`
                button.currentTarget.classList.add('js-active')
            }
        })
    } 

    //Генерация рандомных картинок
    const imgBlock = document.querySelector('.js-gallery')
    const btn = document.querySelectorAll('.js-generate a').forEach(el => {
        el.addEventListener('click', (btn) => {
            let currentAttr = el.getAttribute('data-place')
            generateGallery(imgBlock, currentAttr)
        })
    })


    function generateGallery(arr, place){
        let block = document.createElement('div')
        block.classList.add('div')
        let img = document.createElement('img')
        img.setAttribute('src',`https://loremflickr.com/500/500/${place}?random=${Math.random()}`)
        block.insertAdjacentElement("afterbegin", img)
        imgBlock.insertAdjacentElement("beforeend", block)
    }

});
