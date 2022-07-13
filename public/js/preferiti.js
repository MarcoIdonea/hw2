fetch(ciao).then(OnResponse).then(OnJson);

function OnResponse(response){
  console.log('marco');
    return response.json();
}

function OnJson(json){
 
    const risultato= json;
    const aaa=document.querySelector('#album-view');
    
    for (let i of risultato){
        
    
      const container=document.createElement('div');
      container.classList.add('container');
    
    const titolo_e =document.createElement('h1');
    titolo_e.textContent=i.titolo;
    const descrizione_e=document.createElement('h3');
    descrizione_e.textContent = i.descrizione;
    const img_e =document.createElement('img');
    img_e.src=i.immagine;
    console.log(img_e);
    const contenuto_e= document.createElement('h6');
    contenuto_e.textContent= i.contenuto;
    console.log(titolo_e);
    const img_nolike=document.createElement('img');
      img_nolike.classList.add('nolike');
      img_nolike.src="images/cuorepieno.png";   
 const link=document.createElement('a');
       container.appendChild(img_e);
       container.appendChild(titolo_e);
       container.appendChild(descrizione_e);
       container.appendChild(contenuto_e);
       container.appendChild(img_nolike);
       
      aaa.appendChild(container);
      console.log(titolo_e);
    }

    const nolike= document.querySelectorAll('.container');
    for(const l of nolike ){
      l.addEventListener('click', togli_preferiti);
    
      console.log('amon');
    } 
}
function togli_preferiti(event)
{
  const a = event.currentTarget;
  const img5 = a.querySelector('.nolike');
  img5.src = 'images/cuorevuoto.png';
  const titolo_e=a.querySelector('h1').textContent
  console.log(titolo_e);
  window.location.reload()
  
    fetch(URL1 +titolo_e)//.then(senza_nome);


}
//functio senza_nome

  
  

  



/*function seleziona(event){
 
  const scelta = event.currentTarget;
  const titolo_1 = scelta.querySelector('h1').textContent;
  const image = scelta.querySelector('.mipiace');
  image.src = 'stella.png';
  console.log(titolo_1);
  fetch(URL1 + titolo_1);
  fetch(URL).then(searchResponse).then(Json);

  }*/