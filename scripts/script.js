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
    if(document.querySelectorAll('.gallery').length !== 0){
        const btn = document.querySelector('js-generate')
        const imgBlocks = document.querySelectorAll('')

        function generate(arr){

        }
    }
});