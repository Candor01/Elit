const apikey='fc5a0196234f38d93f6ad2885261e5fb';
      const url_base='https://api.themoviedb.org/3/';
      const nombre_pelicula='Kung Fu Panda 3';
      const busqueda_peliculas='search/movie?api_key=';
      var pelicula=url_base+busqueda_peliculas+apikey+'&query='+nombre_pelicula;
    	var i;
    	var a={};
    	var n;

async function Id(){
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
function consulta(){
  
}
function Top100(lista){
  lista.foreach(elemento=>){

  }

}
   

 