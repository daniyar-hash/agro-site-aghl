  
  const header = document.querySelector('.header');
  const categoriesAsideItems  = document.querySelectorAll('.categories-aside__item');
  const categoryProductslist  = document.querySelector(".category-products__list");
  const categoryProductsItems = document.querySelectorAll(".category-products__item");
  const categoryAsideLink     = document.querySelectorAll('.categories-aside__link');
  const categoryProductsTitle = document.querySelector('.category-products__title');
  const categoryAsideSubLink = document.querySelectorAll('.categories-aside__sublink');
  const headerSearchBtn = document.querySelector('.search__button');
  const headerSearchWrapper = document.querySelector('.search__wrapper-field');
  const searchInput  = document.getElementById("searchInput");



  categoryAsideLink.forEach((element)=>{
    if(categoryProductsTitle.textContent === element.innerText){

      element.closest('.categories-aside__item').classList.add('is-open')
 }
    
   
  })


  categoryAsideSubLink.forEach((element) =>{
    if(categoryProductsTitle.textContent === element.innerText){
         element.closest('.categories-aside__item').classList.add('is-open')
         element.style.color="#D93058";
         

    }
  })



function wrapInnerElement({ itemSelector, targetSelector1,targetSelector2=null, wrapperClass }) {
  document.querySelectorAll(itemSelector).forEach(item => {
    const target1 = item.querySelector(targetSelector1);
    const target2 = item.querySelector(targetSelector2);



    if (!target1) return;


    const wrapper = document.createElement('div');
    wrapper.classList.add(wrapperClass);

    target1.parentNode.insertBefore(wrapper, target1);
    wrapper.appendChild(target1);

    if (!target2) return;

    if(target2){
        wrapper.appendChild(target2);
    }






  });
}

function deleteWrapInnerElement(wrapperClass) {
  document.querySelectorAll(wrapperClass).forEach(wrapper => {

    const parent = wrapper.parentNode;

    while(wrapper.firstChild){
      parent.insertBefore(wrapper.firstChild,wrapper)
    }

    parent.removeChild(wrapper);


  });
}

    function addClassProductsItem(elementList, className){
      elementList.forEach(item=>{
     
        item.classList.add(`${className}`)
      })
    }

    
    function removeClassProductsItem(elementList, className){
      elementList.forEach(item=>{
      item.classList.remove(`${className}`)
      })
    }

//  function openCategoryList(){

  categoriesAsideItems.forEach(item => {

    const dropDown = item.querySelector(".categories-aside__dropdown");

    item.addEventListener('click', (event) => {
      // Code to execute when an <li> is clicked
   
     item.classList.toggle("is-open");
     dropDown.classList.toggle("to-show");
     
      });


      if(item.classList.contains('is-open')){
        dropDown.classList.toggle("to-show")
      }

    });







    headerSearchBtn.addEventListener('click', (e)=>{


    headerSearchWrapper.classList.toggle('hidden');
    searchInput.focus(); 


  })

 
searchInput.addEventListener("keyup", function () {
    let query = this.value;

    console.log(query)



    fetch("/views/site/search.php?word=" + encodeURIComponent(query))
        .then(response => response.text())
        .then(data => {

          console.log(data)
            document.querySelector(".search__results-list").innerHTML = data;
        });


        
});



function updateHeaderClass() {


    if (window.scrollY > 50) {

      header.classList.add('solid');


    } else {
      header.classList.remove('solid');
    
      }
      
    }
  

  // Проверка при загрузке страницы
   window.addEventListener('load', updateHeaderClass);

  // Проверка при скролле
  window.addEventListener('scroll', updateHeaderClass);


