  
  const thTablePeriod = document.querySelector('.th-treatment_period');
  const thTableSolution = document.querySelector('.th-consumption_solution');
  const thTableFeatures = document.querySelector('.th-application_features');
  const thTableHarmfull = document.querySelector('.th-harmful_object');
  const thTableLimit = document.querySelector('.th-limitations');
  const thTableResultImpact = document.querySelector('.th-result_impact');
  const thTableWaitingPeriod = document.querySelector('.th-waiting_period');

  const tdTablePeriod = document.querySelectorAll('.td-treatment_period');
  const tdTableSolution = document.querySelectorAll('.td-consumption_solution');
  const tdTableFeatures = document.querySelectorAll('.td-application_features');
  const tdTableHarmfull = document.querySelectorAll('.td-harmful_object');  
  const tdTableLimit = document.querySelectorAll('.td-limitations');
  const tdTableResultImpact = document.querySelectorAll('.td-result_impact');
  const tdTableWaitingPeriod = document.querySelectorAll('.td-waiting_period');

 



document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".accordion").forEach(accordion => {
    const title = accordion.querySelector(".accordion__title");
    const titleDesc = accordion.querySelector(".accordion__title.desc");

    function updateTitle() {
      if (title) {
        title.textContent = accordion.open ? "Скрыть таблицу" : "Показать таблицу";
      }
      if (titleDesc) {
        titleDesc.textContent = accordion.open ? "Скрыть описание товара" : "Показать описание товара";
      }
    }

    // сразу при загрузке
    updateTitle();

    // при каждом открытии/закрытии
    accordion.addEventListener("toggle", updateTitle);
  });
});





  const allEmpty1 = Array.from(tdTablePeriod).every(td => td.textContent.trim() === '');
  const allEmpty2 = Array.from(tdTableSolution).every(td => td.textContent.trim() === '');
  const allEmpty3 = Array.from(tdTableFeatures).every(td => td.textContent.trim() === '');
  const allEmpty4 = Array.from(tdTableHarmfull).every(td => td.textContent.trim() === '');
  const allEmpty5 = Array.from(tdTableLimit).every(td => td.textContent.trim() === '');
  const allEmpty6 = Array.from(tdTableResultImpact).every(td => td.textContent.trim() === '');
  const allEmpty7 = Array.from(tdTableWaitingPeriod).every(td => td.textContent.trim() === '');







if(allEmpty1) {
    thTablePeriod.style.display='none';
    tdTablePeriod.forEach((td)=>{
        td.style.display='none';
  })
}


if(allEmpty2) {
    thTableSolution.style.display='none';
    tdTableSolution.forEach((td)=>{
        td.style.display='none';
  })
}

if(allEmpty3) {
    thTableFeatures.style.display='none';
    tdTableFeatures.forEach((td)=>{
        td.style.display='none';
  })
}

if(allEmpty4) {
    thTableHarmfull.style.display='none';
    tdTableHarmfull.forEach((td)=>{
        td.style.display='none';
  })
}

if(allEmpty5) {
    thTableLimit.style.display='none';
    tdTableLimit.forEach((td)=>{
        td.style.display='none';
  })
}

if(allEmpty6) {
    thTableResultImpact.style.display='none';
    tdTableResultImpact.forEach((td)=>{
        td.style.display='none';
  })
}

if(allEmpty7) {
    thTableWaitingPeriod.style.display='none';
    tdTableWaitingPeriod.forEach((td)=>{
        td.style.display='none';
  })
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

  function updateHeaderClass() {
    if (window.scrollY > 80) {
      header.classList.remove('transparent');
      header.classList.add('solid');
    } else {
      header.classList.remove('solid');
      header.classList.add('transparent');
    }
  }

  function zoomer(imgId, scaleImage){
    let img, glass, w, h, bw;
    img = document.getElementById(imgId);

    glass = document.createElement("DIV");
    glass.setAttribute('class','product__linza');

    img.parentElement.insertBefore(glass,img);

    glass.style.backgroundImage = "url('" +img.src + "')";
    glass.style.backgroundRepeat = "no-repeat";
    glass.style.backgroundSize = (img.width * scaleImage) + "px " + (img.height * scaleImage) + "px"; //1800  2000;
  

    bw = 3;

    w = glass.offsetWidth/2;  //190/2 = 95
    h = glass.offsetHeight/2; //95

    glass.addEventListener("mousemove", moveZoomer);
    img.addEventListener("mousemove", moveZoomer);
    glass.addEventListener("touchmove", moveZoomer);
    img.addEventListener("touchmove", moveZoomer);


    glass.addEventListener("mouseout", (e)=>{
      glass.style.opacity="0";
    });

    glass.addEventListener("mouseleave", (e)=>{
      glass.style.opacity="0";
    });
    glass.addEventListener("touchend", (e)=>{
      glass.style.opacity="0";
    });

   

  function moveZoomer(e) {

    let pos, x, y;
    e.preventDefault();
    console.log(e);  //target glass
    glass.style.opacity = "1";
    pos = getCursorPos(e);

    x = pos.x;
    y = pos.y;


    if(x > img.width - w/scaleImage){    
       x = img.width - w/scaleImage; //  500-95/4 = 476;
      
      }

    if(x < w/scaleImage) {
      x = w/scaleImage;
    }
    
    if(y > img.height - h/scaleImage){
        y = img.height - h/scaleImage;
    }

    if(y < h/scaleImage){
      y = h/scaleImage
    }

    glass.style.left = (x-w) + "px";   //476 - 95 
    glass.style.top = (y-h) + "px";

    glass.style.backgroundPosition = "-" + ((x * scaleImage) -w + bw) + "px -" + ((y * scaleImage) -h + bw) + "px"; 
    // 
    console.log(glass.style.left)
    console.log(glass.style.backgroundPosition)



  }

  function getCursorPos(e){
    let rect, x = 0, y = 0;

    


  rect = img.getBoundingClientRect(); // координаты img относительно окна

   x = e.clientX - rect.left; // clientX — позиция курсора относительно окна
   y = e.clientY - rect.top;

  return { x, y }; //координаты относительно img

  }

  }


   zoomer("product-image", 4);






  // Проверка при загрузке страницы
  window.addEventListener('load', updateHeaderClass);
 
  // Проверка при скролле
  window.addEventListener('scroll', updateHeaderClass);











 

