  const header = document.querySelector('.header');
  const header__inner = document.querySelector('.header__inner');  
  const header__logo = document.querySelector('.header__logo');
  const header__container = document.querySelector('.header__container');
  const btnModalVideo = document.querySelector('.open-modal-video');
  const popup = document.querySelector('.modal');
  const btnModalClose = document.querySelector('.modal-close');
  const video = document.getElementById('video');
  const burgerBtn = document.querySelector('.burger-button');
  const clodeBtnModal = document.querySelector('.mobile-overlay__close-button');

  burgerBtn.addEventListener('click', (e)=>{

    document.documentElement.classList.add('is-lock');

  })

    clodeBtnModal.addEventListener('click', (e)=>{

    document.documentElement.classList.remove('is-lock');

  })



  // const bannerList = document.querySelector(".banner__list");
  // const bannerSlides = document.querySelectorAll(".banner__item");
  

  // function showSlide(index){
  //     bannerSlides.forEach((item, i)=>{
  //       item.classList.toggle("active", i === index);

  //     });
  // }

  //--------------------///

  //  let index = 0;
  //  let total = 4;
  //  let currentSlide = 0;

  // function changeSlide() {
  // index = (index + 1) % total;  // 1
  // currentSlide = index; // 1
  
//   //showSlide(currentSlide);
//   document.getElementById(`btn${index + 1}`).checked = true; // 2
// }

// let interval = setInterval(changeSlide, 3000);

// document.querySelectorAll('.pagination__label').forEach((label, i) => {
//   label.addEventListener('click', () => {
//     clearInterval(interval);
//     console.log(i)
//     index = i;
//     currentSlide = i; //3
//   //  showSlide(currentSlide);
//     document.getElementById(`btn${i + 1}`).checked = true;
//     interval = setInterval(changeSlide, 3000);
//   });
// });






  // btnModalVideo.addEventListener("click", (e)=>{
  //     e.preventDefault();
  //     popup.classList.add('modal-show');
  //     popup.style.display = "block";
  //     popup.querySelector('#video').play();
  // })

  //   btnModalClose.addEventListener("click", (e)=>{


  //    e.preventDefault();
  //    popup.classList.remove('modal-show');
  //    popup.style.display = "none";


  //     video.pause();
  //     video.currentTime = 0;


  // })


  const hiddenWordsLogo = document.querySelectorAll('.header__logo svg path');

  function updateHeaderClass() {


    if (window.scrollY > 50) {

      header.classList.remove('transparent');
      header.classList.add('solid');
      header__inner.classList.remove('flex-column');
      header__container.classList.remove('container');
      header__inner.classList.add('container');
      header__logo.classList.remove('logo-main');
    

        for( let i=3; i < hiddenWordsLogo.length; i++ ){
          
          hiddenWordsLogo[i].classList.add('hide');


        }


    } else {
      header.classList.remove('solid');
      header.classList.add('transparent');
      header__inner.classList.add('flex-column');
      header__inner.classList.remove('container');
      header__container.classList.add('container');
      header__logo.classList.add('logo-main');

      for( let i=3; i < hiddenWordsLogo.length; i++ ){
        
      hiddenWordsLogo[i].classList.remove('hide');

      }


      
    }
  }

  // Проверка при загрузке страницы
   window.addEventListener('load', updateHeaderClass);

  // Проверка при скролле
  window.addEventListener('scroll', updateHeaderClass);


const dialog = document.getElementById('mobileOverlay');
const openCatalog = dialog.querySelector('[data-open-catalog]');

const closeMenu = dialog.querySelector('[data-close-menu]');

const closeCatalog = dialog.querySelector('[data-close-catalog]');
const closeDialogBtn = dialog.querySelector('[data-dialog-close]');
const openCategories = openCatalog.querySelectorAll('[data-category]');
const subCategories = openCatalog.querySelectorAll('[data-subcategory]');


subCategories.forEach((elem) =>{

  elem.addEventListener('click', (e) =>{
    e.stopPropagation()
  })
})



/* открыть каталог */
openCatalog.addEventListener('click', e => {
  e.preventDefault();
  e.currentTarget.classList.add('is-open');
  // disableDialogClose();
});


/* назад */
closeCatalog.addEventListener('click', (e) => {
 e.stopPropagation();
  openCatalog.classList.remove('is-open');
  // enableDialogClose();

});

openCategories.forEach((elem)=>{


  elem.addEventListener('click', (e)=>{

    
     e.currentTarget.classList.add('is-open')

    
  })

})



document.addEventListener('click', (e) =>{

  const btn = e.target.closest('.header__mobile-back');
  if(!btn) return
  const item = btn.closest('.header__catalog-item')
  if(!item) return
  item.classList.remove('is-open')

})





// /* крестик */
// closeDialogBtn.addEventListener('click', () => {
//   if (dialog.classList.contains('catalog-open')) return;


//   console.log('ddd')
//   dialog.close();
// });




// function disableDialogClose() {
//   closeDialogBtn.setAttribute('disabled', 'true');
//   dialog.dataset.locked = 'true';
// }

// function enableDialogClose() {
//   closeDialogBtn.removeAttribute('disabled');
//   delete dialog.dataset.locked;
// }



// dialog.addEventListener('cancel', e => {
//   if (dialog.classList.contains('is-open')) {
//     e.preventDefault(); // ESC не закрывает
//   }
// });

// dialog.addEventListener('click', e => {
//   if (dialog.classList.contains('is-open')) return;

//   if (e.target === dialog) {
//     dialog.close();
//   }
// });



/////////////////////////


// document.addEventListener('click', e => {
//   const link = e.target.closest('[data-has-children]');

//   if (!link) return;

//   if (window.innerWidth >= 1024) return;

//   e.preventDefault();

//   const item = link.closest('[data-category]');
//   item.classList.toggle('is-open');
// });


//////////////////////









