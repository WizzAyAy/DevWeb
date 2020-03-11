let lesH1 = document.querySelectorAll('h1');
let sommaire = document.getElementById('sommaire');
let liste = document.createElement('ol')
sommaire.appendChild(liste);
let listeSommaire = sommaire.querySelector('ol');

function creeH1 (noeud) {
	//cree les li et les ajoutes a la div sommaire
	let a = document.createElement('a');
	let ancre = noeud.getAttribute('id');
	a.setAttribute('href' , "#" + ancre);
	
	let li = document.createElement('li');
	let text = document.createTextNode(noeud.textContent);
	li.appendChild(text);
	
	a.appendChild(li);
	
	let ol = document.createElement('ol');
		
	let nextDiv = noeud.nextElementSibling;
	if (nextDiv.nodeName == "DIV"){
		
			let lesH2 = nextDiv.querySelectorAll('h2');
			lesH2.forEach(function(elem){
						
				let item = document.createElement('li');
				let texth2 = document.createTextNode(elem.textContent);
				item.appendChild(texth2);
				ol.appendChild(item);
				li.appendChild(ol);
			});
	}
	
	listeSommaire.appendChild(a);
}

lesH1.forEach(creeH1);
