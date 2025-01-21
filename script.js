const header = document.querySelector('header h1');

header.addEventListener('click', () =>{
    header.computedStyleMap.color = 'red';
});