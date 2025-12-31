const headerSearchBtn = document.querySelector('.search__button');
const searchInput  = document.getElementById("searchInput");
const searchContent  = document.querySelector(".search__results-list");
const headerSearchWrapper = document.querySelector('.search__wrapper-field');




// if (!headerSearchBtn || !searchInput || !searchContent || !headerSearchWrapper) {
//     return;
// }

  headerSearchBtn.addEventListener('click', (e)=>{

    e.stopPropagation();
    headerSearchWrapper.classList.toggle('hidden');
    searchInput.focus();  
    
  })
  
  searchInput.addEventListener('click', (e)=>{
     e.stopPropagation();
  })


let currentIndex = -1;
let items = [];

searchInput.addEventListener("input", function () {

const word = searchInput.value.trim();

resetMark();

if(word ==='') return;


// ajax запрос   
   fetch('/search/ajax?word=' + encodeURIComponent(word))
      .then(response => response.text())
      .then(data => {
        // console.log(data)
         searchContent.innerHTML = data;
        items = Array.from(searchContent.querySelectorAll('li'));
      });

       
});

 addEventListener('keydown', (e)=>{
	if(!items.length) return

	if (e.key === 'ArrowDown') {
		e.preventDefault();
		move(1);

	}

	if (e.key ==='ArrowUp') {
		e.preventDefault();
		move(-1);
	}

  if (e.key === 'Enter') {
    e.preventDefault();
     goToItem();
  }

})




function move(step){

  if (currentIndex >=0) {

    items[currentIndex].classList.remove('active');
  }

  currentIndex += step;

  if(currentIndex >= items.length) currentIndex = 0;
  if (currentIndex < 0) currentIndex = items.length - 1;

  items[currentIndex].classList.add('active');

  items[currentIndex].scrollIntoView({
        behavior: 'smooth',
        block: 'nearest'
    });

}

function goToItem() {
  
    if (currentIndex < 0) return;
    const link = items[currentIndex].querySelector('a');

    console.log(link.href)

    if (link) {
        window.location.href = link.href;
    }
}


function resetMark(){

	items = [];
	currentIndex = -1;

}

// клик в любое место документа — закрывает
document.addEventListener('click', () => {
  headerSearchWrapper.classList.add('hidden');     
});
