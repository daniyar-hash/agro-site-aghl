
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
  console.log('hear')
  e.preventDefault();
  e.currentTarget.classList.add('is-open');
});


/* назад */
closeCatalog.addEventListener('click', (e) => {
  e.stopPropagation();
  openCatalog.classList.remove('is-open');

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
