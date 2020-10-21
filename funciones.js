const apikey='fc5a0196234f38d93f6ad2885261e5fb';
      const url_base='https://api.themoviedb.org/3/';
      const nombre_pelicula='Kung Fu Panda 3';
      const busqueda_peliculas='search/movie?api_key=';
      var pelicula=url_base+busqueda_peliculas+apikey+'&query='+nombre_pelicula;
    	var i;
    	var a={};
    	var n;
//a=Id();


async function Id(){
    /*movies = JSON.parse(this.response);
    const id=movies.results[0].id;*/
    
await fetch (pelicula)
 .then((res)=>res.json())
 .then((data=> i=data));

n = `<p >${i.results[0].title}</p>`;
return n;
  }
  const btn = document.getElementById('button');
btn.addEventListener('click', async (event) => {
  event.preventDefault();
document.getElementById('resultado').innerHTML = await Id();
a[0]=await Id();

});
console.log(a);
    //console.log(id_1);

       /* request.onload = function () {
  // Begin accessing JSON data here
var data = JSON.parse(this.response)
  if (request.status >= 200 && request.status < 400) {
    data.forEach((movie) => {
      const card = document.createElement('div')
      card.setAttribute('class', 'card')

      const h1 = document.createElement('h1')
      h1.textContent = movie.title

      const p = document.createElement('p')
      movie.description = movie.description.substring(0, 300)
      p.textContent = `${movie.description}...`

      container.appendChild(card)
      card.appendChild(h1)
      card.appendChild(p)
    })
  }*/
   

 